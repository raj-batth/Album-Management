<?php

namespace App\Http\Controllers;

use App\Http\Resources\PhotographerCollection;
use App\Http\Resources\PhotographerResource;
use App\Models\Photographer;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PhotographerController extends Controller
{
    /**
     * Display a listing of the resource.p
     *
     * @return Illuminate\Http\Resources\Json\ResourceCollection
     */
    public function index(): ResourceCollection
    {
        return PhotographerCollection::collection(Photographer::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photographer  $photographer
     * @return Illuminate\Http\Resources\Json\JsonResource
     */
    public function show(Photographer $photographer): JsonResource
    {
        return new PhotographerResource($photographer);
    }

}
