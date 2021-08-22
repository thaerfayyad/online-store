<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'category_id' => $this-> category_id,
            'image' => $this-> image,
            'purchase_price' => $this-> purchase_price,
            ' sale_price' => $this-> sale_price,
            '  stock' => $this->  stock ,
            'created_at' => $this->created_at->format('Y-m-d h:i a'),
        ];
    }
}
