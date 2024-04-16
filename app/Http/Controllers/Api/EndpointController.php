<?php

namespace App\Http\Controllers\Api;
use App\Models\Endpoint;
use App\Http\Controllers\Controller;
use App\Http\Resources\EndpointResource;
use Illuminate\Http\Request;

class EndpointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $endpoints = Endpoint::orderBy('id', 'asc')->get();
        return EndpointResource::collection($endpoints);
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
    public function show(string $id)
    {
        $endpoint = Endpoint::findOrFail($id);
        return new EndpointResource($endpoint);
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
?>

