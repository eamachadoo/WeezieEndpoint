<?php

namespace App\Http\Controllers\Api;
use App\Models\CLosureZone;
use App\Http\Controllers\Controller;
use App\Http\Resources\EndpointResource;
use Illuminate\Http\Request;

class ClosureZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $closureZones = ClosureZone::orderBy('clz_id', 'asc')->get();
        return EndpointResource::collection($closureZones);
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
    public function show(string $clz_id)
    {
        $closureZone = ClosureZone::findOrFail($clz_id);
        return new EndpointResource($closureZone);
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
