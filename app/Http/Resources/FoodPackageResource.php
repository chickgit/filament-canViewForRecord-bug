<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FoodPackageResource extends JsonResource
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
            'name' => $this->name,
            'price' => $this->price,
            'items' => ItemResource::collection($this->whenLoaded('items')),
            'availability_snacks' => SnackResource::collection($this->whenLoaded('availabilitySnacks')),
        ];
    }
}
