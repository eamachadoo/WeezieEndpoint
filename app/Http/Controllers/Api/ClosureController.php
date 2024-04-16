<?php

namespace App\Http\Controllers\Api;
use App\Models\Closure;
use App\Http\Controllers\Controller;
use App\Http\Resources\EndpointResource;
use Illuminate\Http\Request;

class ClosureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $closure = Closure::orderBy('cl_id', 'asc')->get();
        return EndpointResource::collection($closure);
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
    public function show(string $cl_id)
    {
        $closure = Closure::findOrFail($cl_id);
        return new EndpointResource($closure);
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
