<?php

namespace App\Http\Controllers\Api;
use App\Models\Site;
use App\Http\Controllers\Controller;
use App\Http\Resources\EndpointResource;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sites = Site::orderBy('st_id', 'asc')->get();
        return EndpointResource::collection($sites);
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
        $site = Site::findOrFail($id);
        return new EndpointResource($site);
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
