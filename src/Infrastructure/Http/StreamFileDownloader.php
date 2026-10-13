<?php

declare(strict_types=1);

namespace App\Infrastructure\Http;

use App\Application\Contract\FileDownloader;
use RuntimeException;

/**
 * plain PHP streams, no http client dependency needed for a few downloads
 */
class StreamFileDownloader implements FileDownloader
{
    private const TIMEOUT_SECONDS = 30;

    public function download(string $url, string $targetPath): void
    {
        $context = stream_context_create(['http' => ['timeout' => self::TIMEOUT_SECONDS]]);
        $content = @file_get_contents($url, false, $context);
        if ($content === false || $content === '') {
            throw new RuntimeException(sprintf('Could not download %s', $url));
        }

        $dir = dirname($targetPath);
        if (!is_dir($dir) && !mkdir($dir, 0775, true) && !is_dir($dir)) {
            throw new RuntimeException(sprintf('Could not create directory %s', $dir));
        }

        // write to a temp file first, so a failed write never leaves a broken file behind
        $tmpPath = $targetPath.'.tmp';
        if (file_put_contents($tmpPath, $content) === false || !rename($tmpPath, $targetPath)) {
            @unlink($tmpPath);
            throw new RuntimeException(sprintf('Could not write %s', $targetPath));
        }
    }
}