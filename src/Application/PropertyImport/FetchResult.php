<?php

declare(strict_types=1);

namespace App\Application\PropertyImport;

final readonly class FetchResult
{
    public const DOWNLOADED = 'downloaded';
    public const SKIPPED = 'skipped';
    public const FAILED = 'failed';

    public function __construct(
        public string $url,
        public string $file,
        public string $status,
        public ?string $error = null,
    ) {}
}