<?php

namespace App\Http\Controllers;

use App\Http\Resources\PhotographerAlbumResource;
use App\Models\Photographer;
use Illuminate\Http\Resources\Json\JsonResource;

class PhotographerAlbumController extends Controller
{
    /**
     * @param Photographer $photographer
     * @return Illuminate\Http\Resources\Json\JsonResource
     */
    public function index(Photographer $photographer): JsonResource
    {
        return new PhotographerAlbumResource($photographer);
    }
}
