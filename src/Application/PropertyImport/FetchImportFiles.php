<?php

declare(strict_types=1);

namespace App\Application\PropertyImport;

use App\Application\Contract\FileDownloader;
use App\Framework\Path;
use Throwable;

/**
 * downloads the configured import sources into data/import, see README.md
 */
class FetchImportFiles
{
    public const MAX_AGE_SECONDS = 4 * 3600;

    /**
     * @param string[] $sources urls
     */
    public function __construct(
        private readonly array $sources,
        private readonly FileDownloader $downloader,
        private readonly Path $path,
    )
    {}

    /**
     * @return FetchResult[]
     */
    public function __invoke(bool $force = false): array
    {
        $results = [];
        foreach ($this->sources as $url) {
            $file = 'data/import/'.self::fileName($url);
            $targetPath = $this->path->getPath($file);
            if (!$force && file_exists($targetPath) && filemtime($targetPath) > time() - self::MAX_AGE_SECONDS) {
                $results[] = new FetchResult($url, $file, FetchResult::SKIPPED);
                continue;
            }
            try {
                $this->downloader->download($url, $targetPath);
                $results[] = new FetchResult($url, $file, FetchResult::DOWNLOADED);
            } catch (Throwable $e) {
                $results[] = new FetchResult($url, $file, FetchResult::FAILED, $e->getMessage());
            }
        }
        return $results;
    }

    /**
     * readable part of the url + short hash, so different urls never share a file
     * e.g. .../Gabor.Balint.Szabo@otpip.hu.xml => Gabor.Balint.Szabo-otpip.hu-1a2b3c4d.xml
     */
    public static function fileName(string $url): string
    {
        $name = pathinfo((string) parse_url($url, PHP_URL_PATH), PATHINFO_FILENAME);
        $slug = trim((string) preg_replace('/[^A-Za-z0-9._-]+/', '-', $name), '-.');
        return ($slug === '' ? 'import' : $slug).'-'.substr(md5($url), 0, 8).'.xml';
    }
}