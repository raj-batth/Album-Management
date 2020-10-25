<?php

namespace App\Http\Controllers;

use App\Http\Resources\AlbumCollection;
use App\Http\Resources\AlbumResource;
use App\Models\Album;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Illuminate\Http\Resources\Json\ResourceCollection
     */
    public function index(): ResourceCollection
    {
        return AlbumCollection::collection(Album::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return Illuminate\Http\Resources\Json\JsonResource
     */
    public function show(Album $album): JsonResource
    {
        return new AlbumResource($album);
    }
}
