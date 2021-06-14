@extends('layouts.layout')

@section('titreItem')
    <h1>Administration</h1>
@endsection

@section('contenu')
    @if(session()->has('info'))
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <p class="card-text">{{ session('info') }}</p>
            </div>
        </div>
    @endif
    <br>
    <div class="container">
        <div class="row card text-white bg-dark">
        @auth
            <h4 class="card-header">Modifier un club</h4>
            <div class="card-body">
                <form action="{{ route('clubs.update',$club->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <br>
                    <div class="form-group">
                        <label for="nom">Nom club</label>
                        <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" 
                            id="nom" value="{{ old('nom', $club->nom) }}" placeholder="Nom du club">
                        @error('nom')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <br>
                    <button type="submit" class="btn btn-secondary">Modifier</button>
                </form>
            </div>
            @else
            <h4 class="card-header">Accès interdit</h4>
            <div class="card-body"><label for="">Vous n'êtes pas autorisé à consulter cette page.</label></div>
            @endauth
        </div>
    </div>
@endsection