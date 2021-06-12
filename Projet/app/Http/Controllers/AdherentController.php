<?php

namespace App\Http\Controllers;

use App\Models\Adherent;
use Illuminate\Http\Request;
use App\Models\Club;
use App\Http\Requests\InsertAdherentRequest;

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
        $clubs = Club::all();
        return view('createAdherent', compact('clubs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\InsertAdherentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertAdherentRequest $request)
    {
        Adherent::create($request->all());
        return back()->with('info', 'L\'adhérent a bien été ajouté à la base de données');
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
        $clubs = Club::all();
        return view('editAdherent', compact('adherent', 'clubs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\InsertAdherentRequest  $request
     * @param  \App\Models\Adherent  $adherent
     * @return \Illuminate\Http\Response
     */
    public function update(InsertAdherentRequest $request, Adherent $adherent)
    {
        $adherent->update($request->all());
        return back()->with('info', 'L\'adhérent a bien été modifié dans la base de données');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adherent  $adherent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adherent $adherent)
    {
        $adherent->delete();
        return back()->with('info', 'L\'adhérent a bien été supprimé de la base de données');
    }
}
