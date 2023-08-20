<?php

namespace App\Filament\Resources\FoodPackageResource\Pages;

use App\Filament\Resources\FoodPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFoodPackages extends ListRecords
{
    protected static string $resource = FoodPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
