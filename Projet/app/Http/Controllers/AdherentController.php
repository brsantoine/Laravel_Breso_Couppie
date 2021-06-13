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
        $equipesClub = Club::find($adherent->club_id)->equipes;

        $adherent->with('equipes')->get();
        $adherent->equipes = $adherent->equipes->toArray();

        $equipesAdherent = array();
        if(array_key_exists(0, $adherent->equipes)) {
            $equipesAdherent = array_keys(array_flip($adherent->equipes[0]["pivot"]), "equipe_id");
        }
        
        $clubs = Club::all();
        return view('editAdherent', compact('adherent', 'clubs', 'equipesClub', 'equipesAdherent'));
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
        /*$adherent->with('equipes')->get();
        $adherent->equipes = $adherent->equipes->toArray();
        if(array_key_exists(0, $adherent->equipes)) {
            $equipesAdherent = array_keys(array_flip($adherent->equipes[0]["pivot"]), "equipe_id");
            foreach($equipesAdherent as $eq) {
                $adherent->equipes()->detach($eq);
            }
        }

        if(!empty($request->input('id'))) {
            foreach($request->input('id') as $check) {
                $adherent->equipes()->attach($check);
            }
        }*/
        
        //$adherent->save();

        $adherent->update($request->all());
        return back()->with('info', 'L\'adhérent a bien été modifié de la base de données');
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
