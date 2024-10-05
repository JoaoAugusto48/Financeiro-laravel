<?php

namespace App\Enums\Sort;

enum BankSortEnum: string
{
    case NAME = 'name';
    case NUMBER = 'number';
    case ABBREVIATION = 'abbreviation';

    public static function allowedSorts(): array
    {
        return [
            self::NAME->value,
            self::NUMBER->value,
            self::ABBREVIATION->value,
        ];
    }
}