<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Snack extends Model implements HasMedia
{
    use HasFactory, HasUuids, InteractsWithMedia;

    protected $fillable = [
        'name',
        'category_id',
        'price',
    ];

    public function foodPackages()
    {
        return $this->belongsToMany(FoodPackage::class, 'food_package_availability_snack');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
