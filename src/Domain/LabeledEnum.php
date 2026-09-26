<?php

declare(strict_types=1);

namespace App\Domain;

/**
 * basically a temporary solution, while i18n is not implemented
 * after that labels become irrelevant and enum->values can be used
 *
 * so placing this interface here for now with purpose, to indicate that
 * this should be temporary ;)
 */
interface LabeledEnum
{
    public function label(): string;
}