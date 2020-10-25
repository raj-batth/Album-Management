<?php

namespace App\Http\Controllers;

use App\Http\Resources\PhotographerAlbumPhotoResource;
use App\Models\Album;
use App\Models\Photographer;
use Illuminate\Http\Resources\Json\JsonResource;

class PhotographerAlbumPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Illuminate\Http\Resources\Json\JsonResource
     */
    public function index(Photographer $photographer, Album $album): JsonResource
    {
        return new PhotographerAlbumPhotoResource($album);
    }
}
