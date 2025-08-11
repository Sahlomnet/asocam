<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specimen;
use App\Models\SpecimenImgs;

class SpecimensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specimens = Specimen::all();
        return view('ejemplares.index', compact('specimens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $specimen = Specimen::find($id);
        $specimenPic = SpecimenImgs::where('specimen_id',$id)->first();
        $father = Specimen::where('code', $specimen->father_code)->first();
        $mother = Specimen::where('code', $specimen->mother_code)->first();
        // dd($father);
        // $specimens_owner = Specimen::where('owner_id',$id)->get();
        return view('ejemplares.show', compact('specimen', 'specimenPic', 'father', 'mother'));
        // return view('ejemplares.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
