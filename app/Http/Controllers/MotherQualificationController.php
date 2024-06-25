<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotherQualification;

class MotherQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $MotherQualifications = MotherQualification::all();
        foreach($MotherQualifications as $sal){
            $sal->label=$sal->MotherQualification;
        }
        return response()->json($MotherQualifications,200);
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
        $MotherQualification =MotherQualification::create($request->all());
        return response()->json($MotherQualification,200);
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
