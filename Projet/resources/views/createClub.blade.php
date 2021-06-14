@extends('layouts.layout')

@section('titreItem')
    <h1>Administration</h1>
@endsection

@section('contenu')
    @if(session()->has('info'))
        <div class="card text-white bg-success mb-3" style="max-wdith: 18rem;">
            <div class="card-body">
                <p class="card-text">{{ session('info') }}</p>
            </div>
        </div>
    @endif
    <br>
    <div class="container">
        <div class="row card text-white bg-dark">
        @auth
            <h4 class="card-header">Ajouter un club</h4>
            <div class="card-body">
                <form action="{{ route('clubs.store')}}" method="POST">
                    @csrf
                    <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Nom du club">
                                @error('nom')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    <br>
                    <button type="submit" class="btn btn-secondary">Envoyer</button>
                </form>
            </div>
        @else
        <h4 class="card-header">Accès interdit</h4>
        <div class="card-body"><label for="">Vous n'êtes pas autorisé à consulter cette page.</label></div>
        @endauth
        </div>
    </div>
@endsection