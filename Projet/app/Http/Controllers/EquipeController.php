<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;
use App\Models\Club;
use App\Http\Requests\InsertEquipeRequest;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::all();
        return view('equipes', compact('equipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clubs = Club::all();
        return view('createEquipe', compact('clubs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\InsertEquipeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertEquipeRequest $request)
    {
        Equipe::create($request->all());
        return back()->with('info', 'L\'équipe a bien été ajouté.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
        $club = $equipe->club;
        $equipe->with('adherents')->get();
        return view('equipe', compact('equipe', 'club'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        $clubs = Club::all();
        return view('editEquipe', compact('equipe', 'clubs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\InsertEquipeRequest  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(InsertEquipeRequest $request, Equipe $equipe)
    {
        $equipe->update($request->all());
        return back()->with('info', 'L\'équipe a bien été modifié dans la base de données');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
        $equipe->delete();
        return back()->with('info', 'L\'équipe a bien été supprimé dans la base de données');
    }
}
