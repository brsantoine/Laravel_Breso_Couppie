@extends('layouts.layout')

@section('titrePage')
    Information sur le match
@endsection

@section('titreItem')
    <h3>Information match</h3>
@endsection

@section('contenu')
    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">{{ $equipeA->nom . ' ' . $match->score . ' ' . $equipeB->nom }}</h5>
        </header>
        <div class="card-content">
            <div class="content">
                
            </div>
        </div>
    </div>
@endsection