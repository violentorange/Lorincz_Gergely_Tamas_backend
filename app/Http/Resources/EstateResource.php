<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EstateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "kategoria" => $this->category->nev,
            "leiras" => $this->leiras,
            "hirdetesDatuma" => $this->hirdetesDatuma,
            "tehermentes" => $this->tehermentes,
            "ar" => $this->ar,
            "kepUrl" => $this->kepUrl,
        ];
    }
}
