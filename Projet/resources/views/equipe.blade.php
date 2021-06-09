@extends('layouts.layout')

@section('titrePage')
    Information sur l'équipe
@endsection

@section('contenu')
    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">Nom de l'équipe : {{ $equipe->nom }}</h5>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Club : {{ $club->nom }}</p>
            </div>
        </div>
    </div>
@endsection