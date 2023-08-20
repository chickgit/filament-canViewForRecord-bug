<?php

namespace App\Filament\Resources\FoodPackageResource\Pages;

use App\Filament\Resources\FoodPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Arr;

class EditFoodPackage extends EditRecord
{
    protected static string $resource = FoodPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    // public function getRelationManagers(): array
    // {
    //     $array = parent::getRelationManagers();

    //     if ($this->data['type'] === 'snack') {
    //         // unset($array[1]);
    //         // $filtered = Arr::except($array, 'App\Filament\Resources\FoodPackageResource\RelationManagers\AvailabilitySnacksRelationManager');
    //         $array = array_filter($array, fn ($value) => $value !== 'App\Filament\Resources\FoodPackageResource\RelationManagers\AvailabilitySnacksRelationManager');
    //         // dd($filtered);
    //     }

    //     return $array;
    // }
}
