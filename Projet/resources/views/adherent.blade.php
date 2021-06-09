@extends('layouts.layout')

@section('titrePage')
    Information sur le joueur
@endsection

@section('titreItem')
    <h3>Information adhérent</h3>
@endsection

@section('contenu')
    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">{{ $adherent->nom . ' ' . $adherent->prenom }}</h5>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Age : {{ $adherent->age }}</p>
                <p>Sexe : {{ $adherent->sexe }}</p>
            </div>
        </div>
    </div>
@endsection