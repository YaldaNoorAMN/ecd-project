<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FatherOccupation;

class FatherOccupationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $FatherOccupation = FatherOccupation::all();
        foreach($FatherOccupations as $sal){
            $sal->label=$sal->FatherOccupation;
        }
        return response()->json($FatherOccupations,200);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        $request->validate([
            "FatherOccupation"=> "string|required",
        ]);
        $FatherOccupation = FatherOccupation::create($request->all());
        return response()->json($FatherOccupation,200);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
