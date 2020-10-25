<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhotographerCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone_number,
            'email' => $this->email,
            'bio' => $this->bio,
            'profile_picture' => url("img/{$this->profile_picture}"),
            'links' => [
                [
                    'rel' => 'photographers.albums',
                    'href' => route('photographers.albums.index', $this->id),
                ],
            ],
        ];
    }
}
