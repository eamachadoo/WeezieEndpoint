<?php

namespace App\Http\Controllers\Api;
use App\Models\FdpZone;
use App\Http\Controllers\Controller;
use App\Http\Resources\EndpointResource;
use Illuminate\Http\Request;

class FdpZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fdpZones = FdpZone::orderBy('fdpz_id', 'asc')->get();
        return EndpointResource::collection($fdpZones);
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
    public function show(string $fdpz_id)
    {
        $fdpZone = FdpZone::findOrFail($fdpz_id);
        return new EndpointResource($fdpZone);
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
