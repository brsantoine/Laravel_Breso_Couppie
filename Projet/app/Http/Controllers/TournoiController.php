<?php

namespace App\Http\Controllers;

use App\Models\Tournoi;
use Illuminate\Http\Request;

class TournoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournois = Tournoi::orderByDesc('datefin')->get();
        return view('tournois', compact('tournois'));
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
     * @param  \App\Models\Tournoi  $tournoi
     * @return \Illuminate\Http\Response
     */
    public function show(Tournoi $tournoi)
    {
        $matches = Tournoi::find($tournoi->id)->matches->sortByDesc('datefin');

        $today = getdate();
        $today = $today['year'] . '-' . ($today['mon']-10 < 0 ? '0'.$today['mon']:$today['mon']) . '-' . ($today['mday']-10 < 0 ? '0'.$today['mday']:$today['mday']);

        return view('tournoi', compact('tournoi', 'matches', 'today'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tournoi  $tournoi
     * @return \Illuminate\Http\Response
     */
    public function edit(Tournoi $tournoi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tournoi  $tournoi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tournoi $tournoi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tournoi  $tournoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tournoi $tournoi)
    {
        //
    }
}
