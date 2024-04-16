<?php

namespace App\Http\Controllers\Api;
use App\Models\Pathway;
use App\Http\Controllers\Controller;
use App\Http\Resources\EndpointResource;
use Illuminate\Http\Request;

class PathwayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pathways = Pathway::orderBy('pw_id', 'asc')->get();
        return EndpointResource::collection($pathways);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $pw_id)
    {
        $pathway = Pathway::findOrFail($pw_id);
        return new EndpointResource($pathway);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
