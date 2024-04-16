<?php

namespace App\Http\Controllers\Api;
use App\Models\AnnotationZone;
use App\Http\Controllers\Controller;
use App\Http\Resources\EndpointResource;
use Illuminate\Http\Request;

class AnnotationZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annotationZones = AnnotationZone::orderBy('anz_id', 'asc')->get();
        return EndpointResource::collection($annotationZones);
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
    public function show(string $anz_id)
    {
        $annotationZone = AnnotationZone::findOrFail($anz_id);
        return new EndpointResource($annotationZone);
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
