<?php

namespace App\Http\Controllers;

use App\Models\Of_tab;
use Illuminate\Http\Request;

class Of_tabController extends Controller
{
    public function index(){
        $ofTabs = Of_tab::all();
        return response()->json($ofTabs);
    }

    public function show($id){
        $ofTabs = Of_tab::find($id);
        return response()->json($ofTabs);
    }

    public function store(Request $request){
        $ofTabs = Of_tab::create($request->all());
        return response()->json($ofTabs);
    }

}
