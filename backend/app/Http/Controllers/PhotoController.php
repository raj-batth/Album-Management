<?php

namespace App\Http\Controllers;

use App\Http\Resources\PhotoCollection;
use App\Http\Resources\PhotoResource;
use App\Models\Photo;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Illuminate\Http\Resources\Json\ResourceCollection
     */
    public function index(): ResourceCollection
    {
        return PhotoCollection::collection(Photo::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return Illuminate\Http\Resources\Json\JsonResource
     */
    public function show(Photo $photo): JsonResource
    {
        return new PhotoResource($photo);
    }

}
