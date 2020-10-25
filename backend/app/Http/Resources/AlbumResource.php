<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlbumResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'img' => url("img/{$this->img}"),
            'date' => isset($this->created_at) ? (string) $this->created_at : null,
            'featured' => $this->featured ? true : false,
            'links' => [
                [
                    'rel' => 'albums.photos',
                    'href' => route('albums.photos.index', $this->id),
                ],
            ],
        ];
    }
}
