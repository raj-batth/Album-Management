<?php

namespace App\Http\Controllers;

use App\Http\Resources\AlbumPhotoResource;
use App\Models\Album;
use Illuminate\Http\Resources\Json\JsonResource;

class AlbumPhotoController extends Controller
{

    /**
     * @param Album $album
     * @return Illuminate\Http\Resources\Json\JsonResource
     */
    public function index(Album $album): JsonResource
    {
        return new AlbumPhotoResource($album);
    }
}
