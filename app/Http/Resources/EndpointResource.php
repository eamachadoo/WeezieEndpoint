<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EndpointResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
{
    if (is_array($this->resource)) {
        // If the resource is an array (of headers), return it as is
        return [
            'data' => $this->resource,
        ];
    } 
}
}
