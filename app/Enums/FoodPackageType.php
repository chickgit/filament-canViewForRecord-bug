<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum FoodPackageType: string implements HasLabel
{
    case PACKAGE = 'package';
    case SNACK = 'snack';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::PACKAGE => trans('package'),
            self::SNACK => trans('snack'),
        };
    }
}
