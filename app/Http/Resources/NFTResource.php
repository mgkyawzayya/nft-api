<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NFTResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'image' => $this->image,
            'tokenId' => $this->tokenId,
            'name' => $this->name,
            'attributes' => CategoryResource::collection($this->categories)
        ];
    }
}
