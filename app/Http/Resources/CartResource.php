<?php

namespace App\Http\Resources;

use App\Filament\Resources\CustomerResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'food_package' => new FoodPackageResource($this->whenLoaded('foodPackage')),
            'is_spicy' => $this->is_spicy,
            'snacks' => $this->snacks,
            'amount' => $this->amount,
            'date_food_at' => $this->date_food_at,
            'customer_id' => new CustomerResource($this->whenLoaded('customer')),
            'customer_child_id' => new CustomerChildResource($this->whenLoaded('customerChild')),
            'room_id' => new RoomResource($this->whenLoaded('room')),
        ];
    }
}
