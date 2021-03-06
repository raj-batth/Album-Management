<?php

namespace App\Http\Resources;

use App\Models\Album;
use Illuminate\Http\Resources\Json\JsonResource;

class PhotographerAlbumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
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
            'albums' => AlbumCollection::collection(Album::where('photographer_id', $this->id)->get()),
        ];
    }
}
