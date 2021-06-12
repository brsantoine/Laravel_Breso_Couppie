<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use App\Http\Requests\InsertClubRequest;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = Club::all();
        return view('clubs', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createClub');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\InsertClubRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertClubRequest $request)
    {
        Club::create($request->all());
        return back()->with('info', 'Le club a bien été ajouté.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        //
        $equipes = Club::find($club->id)->equipes;
        return view('club', compact('club', 'equipes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        return view('editClub', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\InsertClubRequest  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(InsertClubRequest $request, Club $club)
    {
        $club->update($request->all());
        return back()->with('info', 'Le club a bien été modifié dans la base de données');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        $club->delete();
        return back()->with('info', 'Le club a bien été supprimé de la base de données');
    }
}
