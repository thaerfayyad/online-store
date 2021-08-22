<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryApiResource extends JsonResource
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
        {
            return [
                'id' => $this->id,
                'name' => $this->title,
                'description' => $this->body,
                'created_at' => $this->created_at->format('Y-m-d h:i a'),
            ];
        }
    }
}
