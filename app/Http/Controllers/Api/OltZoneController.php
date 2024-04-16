<?php

namespace App\Http\Controllers\Api;
use App\Models\OltZone;
use App\Http\Controllers\Controller;
use App\Http\Resources\EndpointResource;
use Illuminate\Http\Request;

class OltZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oltZones = OltZone::orderBy('oltz_id', 'asc')->get();
        return EndpointResource::collection($oltZones);
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
    public function show(string $oltz_id)
    {
        $oltZone = OltZone::findOrFail($oltz_id);
        return new EndpointResource($oltZone);
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
