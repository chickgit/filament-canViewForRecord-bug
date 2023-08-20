<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CalendarFoodPackageResource;
use App\Models\CalendarFoodPackage;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class CalendarFoodPackageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // get all data 2 minggu - 1 bulan kedepan.
        $data = QueryBuilder::for(CalendarFoodPackage::with('foodPackage'))
            ->allowedFilters(['start', 'end'])
            ->get();

        return CalendarFoodPackageResource::collection($data);
    }
}
