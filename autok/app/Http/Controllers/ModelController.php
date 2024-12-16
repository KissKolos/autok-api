<?php

namespace App\Http\Controllers;

use App\Models\Carmodel;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Carmodel::all();

        return response()->json(['models' => $model]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = Carmodel::create($request->all());

        return response()->json(['models' => $model]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $model = Carmodel::findOrFail($id);
        $product->update($request->all());
        
        return response()->json(['models' => $model]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = Body::findOrFail($id);
        $model->delete();

        return response()->json([
            'message' => 'Model deleted successfully',
            'id' => $id
    ]);
    }
}