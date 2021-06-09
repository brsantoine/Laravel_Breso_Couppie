<?php

namespace App\Http\Controllers;

use App\Models\Adherent;
use Illuminate\Http\Request;

class AdherentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adherents = Adherent::all();
        return view('adherents', compact('adherents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adherent  $adherent
     * @return \Illuminate\Http\Response
     */
    public function show(Adherent $adherent)
    {
        $club = $adherent->club;
        return view('adherent', compact('adherent', 'club'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adherent  $adherent
     * @return \Illuminate\Http\Response
     */
    public function edit(Adherent $adherent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adherent  $adherent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adherent $adherent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adherent  $adherent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adherent $adherent)
    {
        //
    }
}
