<?php

namespace App\Http\Controllers\Api;
use App\Models\FtbZone;
use App\Http\Controllers\Controller;
use App\Http\Resources\EndpointResource;
use Illuminate\Http\Request;

class FtbZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ftpZones = FtbZone::orderBy('ftbz_id', 'asc')->get();
        return EndpointResource::collection($ftpZones);
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
    public function show(string $ftbz_id)
    {
        $ftpZone = FtbZone::findOrFail($ftbz_id);
        return new EndpointResource($ftpZone);
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
