<?php

declare(strict_types=1);

namespace App\Shared;

final class Str
{
    public static function joinNonEmpty(
        string $separator,
        array $values,
    ): string {
        return implode(
            $separator,
            array_filter(
                $values,
                static fn ($value) => $value !== null && $value !== '',
            ),
        );
    }
}