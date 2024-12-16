<?php

namespace App\Http\Controllers;

use App\Models\Body;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $body = Body::all();

        return response()->json(['bodies' => $body]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $body = Body::create($request->all());

        return response()->json(['bodies' => $body]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $body = Body::findOrFail($id);
        $product->update($request->all());
        
        return response()->json(['bodies' => $body]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $body = Body::findOrFail($id);
        $body->delete();

        return response()->json([
            'message' => 'Body deleted successfully',
            'id' => $id
    ]);
    }
}