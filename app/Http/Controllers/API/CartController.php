<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\CustomerChild;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Cart::query()
            ->with([
                'foodPackage',
                'customerChild',
                'room',
            ])
            ->where('customer_id', $request->user()->id)
            ->get();

        return CartResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'food_package_id' => 'required|string|max:36|exists:food_packages,id',
            'is_spicy' => 'required|boolean',
            'snacks' => 'array',
            'snacks.*' => 'required|string|max:36',
            'amount' => 'required|integer|min:1|max:100',
            'date_food_at' => 'required|date|date_format:d F Y H:i:s',
            'for_child' => 'required|boolean',
            'customer_child_id' => 'required_if:for_child,1|string|max:36|exists:customer_children,id',
            'room_id' => 'required_if:for_child,0|string|max:36|exists:rooms,id',
        ]);

        if ($request->for_child) {
            $child = CustomerChild::find($request->customer_child_id);
            $request->merge(['room_id' => $child->room_id]);
        }

        $request->merge(['customer_id' => $request->user()->id]);

        Cart::create($request->all());

        return response(true, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
