<?php

declare(strict_types=1);

namespace App\Application\Contract;

interface FileDownloader
{
    /**
     * downloads $url to $targetPath, replacing it only after a successful download
     *
     * @throws \RuntimeException
     */
    public function download(string $url, string $targetPath): void;
}