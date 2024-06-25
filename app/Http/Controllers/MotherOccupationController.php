<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotherOccupation;

class MotherOccupationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $MotherOccupations = MotherOccupation::all();
        foreach($MotherOccupations as $sal){
            $sal->label=$sal->Gender;
        }
        return response()->json($MotherOccupations,200);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        $request->validate([
            "name"=> "string|required",
        ]);
        $MotherOccupation = MotherOccupation::create($request->all());
        return response()->json($MotherOccupation,200);
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
