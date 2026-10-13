<?php

declare(strict_types=1);

namespace App\Cli;

use App\Application\PropertyImport\FetchImportFiles;
use App\Application\PropertyImport\FetchResult;

/**
 * php cli.php import:fetch [--force]
 */
class FetchImportFilesCommand
{
    public function __construct(
        private readonly FetchImportFiles $fetchImportFiles,
    )
    {}

    /**
     * @param string[] $args
     */
    public function __invoke(array $args): int
    {
        $results = ($this->fetchImportFiles)(in_array('--force', $args, true));

        $failed = 0;
        foreach ($results as $result) {
            echo match ($result->status) {
                FetchResult::DOWNLOADED => sprintf("downloaded %s\n    -> %s\n", $result->url, $result->file),
                FetchResult::SKIPPED => sprintf(
                    "skipped %s\n    %s is newer than %d hours, use --force\n",
                    $result->url,
                    $result->file,
                    FetchImportFiles::MAX_AGE_SECONDS / 3600,
                ),
                FetchResult::FAILED => sprintf("failed %s\n    %s\n", $result->url, $result->error),
            };
            if ($result->status === FetchResult::FAILED) {
                $failed++;
            }
        }
        if ($results === []) {
            echo "No import sources configured in config/import.php\n";
        }

        return $failed === 0 ? 0 : 1;
    }
}
