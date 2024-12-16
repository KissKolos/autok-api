<?php

namespace App\Http\Controllers;

use App\Models\Fuel;
use Illuminate\Http\Request;

class FuelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fuel = Fuel::all();

        return response()->json(['fuels' => $fuel]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fuel = Fuel::create($request->all());

        return response()->json(['fuels' => $fuel]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fuel = Fuel::findOrFail($id);
        $product->update($request->all());
        
        return response()->json(['fuels' => $fuel]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fuel = Fuel::findOrFail($id);
        $fuel->delete();

        return response()->json([
            'message' => 'Fuel deleted successfully',
            'id' => $id
    ]);
    }
}