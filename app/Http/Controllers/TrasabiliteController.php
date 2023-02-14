<?php

namespace App\Http\Controllers;

use App\Models\Trasabilite;
use Illuminate\Http\Request;

class TrasabiliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('LabelPage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_operateur'          =>  'required',
            'splice_name'         =>  'required',
            'location'         =>  'required',
            'quantite'         =>  'required'
        ]);

        

        $trasabilite = new Trasabilite;

        $trasabilite->id_operateur = $request->id_operateur;
        $trasabilite->splice_name = $request->splice_name;
        $trasabilite->location = $request->location;
        $trasabilite->quantite = $request->quantite;

        $trasabilite->save();

        return redirect()->route('trasabilite.index')->with('success', 'Splice Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trasabilite  $trasabilite
     * @return \Illuminate\Http\Response
     */
    public function show(Trasabilite $trasabilite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trasabilite  $trasabilite
     * @return \Illuminate\Http\Response
     */
    public function edit(Trasabilite $trasabilite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trasabilite  $trasabilite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trasabilite $trasabilite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trasabilite  $trasabilite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trasabilite $trasabilite)
    {
        //
    }
}
