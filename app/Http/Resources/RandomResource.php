<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RandomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $breakdowns = $this->breakdowns()->get();
        return [
            'id' => $this->id,
            'values' => $this->values,
            'flag' => (boolean) $this->flag,
            'breakdowns' => $breakdowns
        ];
    }
}
