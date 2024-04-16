<?php

namespace App\Http\Controllers;

use App\Models\Of_tab;
use Illuminate\Http\Request;

class Of_tabController extends Controller
{
    public function index()
    {
        try {
            $of_tab = new Of_tab();
            $ids = $of_tab->getType();

            return view('welcome', ['ids' => $ids]);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            //retorna mensagem de erro em caso de receber NULL ou algum erro
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }
    /*
    public function show($id){
        $ofTabs = Of_tab::find($id);
        return response()->json($ofTabs);
    }

    public function store(Request $request){
        $ofTabs = Of_tab::create($request->all());
        return response()->json($ofTabs);
    }
    */
}
