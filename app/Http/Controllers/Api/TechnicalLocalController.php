<?php

namespace App\Http\Controllers\Api;
use App\Models\TechnicalLocal;
use App\Http\Controllers\Controller;
use App\Http\Resources\EndpointResource;
use Illuminate\Http\Request;

class TechnicalLocalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technicalLocals = TechnicalLocal::orderBy('tl_id', 'asc')->get();
        return EndpointResource::collection($technicalLocals);
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
    public function show(string $tl_id)
    {
        $technicalLocal = TechnicalLocal::findOrFail($tl_id);
        return new EndpointResource($technicalLocal);
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
