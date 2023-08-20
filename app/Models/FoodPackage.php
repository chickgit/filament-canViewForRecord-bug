<?php

namespace App\Models;

use App\Enums\FoodPackageType;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class FoodPackage extends Model implements HasMedia
{
    use HasFactory, HasUuids, InteractsWithMedia;

    protected $fillable = [
        'name',
        'price',
        'type',
    ];

    protected $casts = [
        'type' => FoodPackageType::class,
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function calendarFoodPackages()
    {
        return $this->belongsToMany(CalendarFoodPackage::class);
    }

    public function availabilitySnacks()
    {
        return $this->belongsToMany(Snack::class, 'food_package_availability_snack');
    }
}
