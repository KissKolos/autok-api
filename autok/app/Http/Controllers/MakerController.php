<?php

namespace App\Http\Controllers;

use App\Models\Maker;
use Illuminate\Http\Request;

class MakerController extends Controller
{
    public function models(string $makerID){
        $maker = Maker::find($makerID);
        $models=$maker->models;
        $result['data']= $models;
        return response()->json($result);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maker = Maker::all();

        return response()->json(['makers' => $maker]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $maker = Maker::create($request->all());

        return response()->json(['makers' => $maker]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $maker = Maker::findOrFail($id);
        $product->update($request->all());
        
        return response()->json(['makers' => $maker]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $maker = Maker::findOrFail($id);
        $maker->delete();

        return response()->json([
            'message' => 'Maker deleted successfully',
            'id' => $id
    ]);
    }
}

