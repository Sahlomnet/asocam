<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Breeder;
use App\Models\Specimen;

class BreederController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breeders = Breeder::all();
        return view('criadores.index', compact('breeders'));
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
        $breeder = Breeder::find($id);
        // $movies = Movie::where('name','like','%'.$request->name.'%')->get();
        $specimens_breeder = Specimen::where('breeder_id',$id)->get();
        // return $specimens_breeder;
        // return $breeder;
        return view('criadores.show', compact('breeder', 'specimens_breeder'));

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
