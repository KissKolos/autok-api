<?php

namespace App\Http\Controllers;

use App\Models\Transmission;
use Illuminate\Http\Request;

class TransmissionController extends Controller
{
   /**
    * Display a listing of the resource.
    */
   public function index()
   {
       $transmission = Transmission::all();

       return response()->json(['transmissions' => $transmission]);
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
       $transmission = Transmission::create($request->all());

       return response()->json(['transmissions' => $transmission]);
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, $id)
   {
       $transmission = Transmission::findOrFail($id);
       $product->update($request->all());
       
       return response()->json(['transmissions' => $transmission]);
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy($id)
   {
       $transmission = Transmission::findOrFail($id);
       $transmission->delete();

       return response()->json([
           'message' => 'Transmission deleted successfully',
           'id' => $id
   ]);
   }
}