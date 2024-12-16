<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $color = Color::all();

        return response()->json(['colors' => $color]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $color = Color::create($request->all());

        return response()->json(['colors' => $color]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $color = Color::findOrFail($id);
        $product->update($request->all());
        
        return response()->json(['colors' => $color]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $color = Color::findOrFail($id);
        $color->delete();

        return response()->json([
            'message' => 'Color deleted successfully',
            'id' => $id
    ]);
    }
}