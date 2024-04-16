<?php

namespace App\Http\Controllers\Api;
use App\Models\Cable;
use App\Http\Controllers\Controller;
use App\Http\Resources\EndpointResource;
use Illuminate\Http\Request;

class CableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cables = Cable::orderBy('cb_id', 'asc')->get();
        return EndpointResource::collection($cables);
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
    public function show(string $cb_id)
    {
        $cable = Cable::findOrFail($cb_id);
        return new EndpointResource($cable);
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
