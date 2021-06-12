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
            <h4 class="card-header">Modifier un joueur</h4>
            <div class="card-body">
                <form action="{{ route('adherents.store')}}" method="POST">
                    @csrf
                    <br>
                        <div class="form-group">
                            <label for="club_id">Club : </label>
                            @foreach($clubs as $club)
                                <input type="radio" id="club_id" name="club_id" value="{{$club->id}}">
                                <label for="club_id">{{$club->nom}}</label>
                            @endforeach
                            @error('club_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Nom de l'adhérent">
                                @error('nom')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" id="prenom" placeholder="Prénom de l'adhérent">
                                @error('prenom')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    <br>
                        <div class="form-group">
                            <input type="number" class="form-control @error('age') is-invalid @enderror" name="age" id="age" placeholder="Âge de l'adhérent">
                                @error('age')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    <br>
                        <div class="form-group">
                            <label for="sexe">Sexe : </label>
                                <input type="radio" id="sexe" name="sexe" value="M">
                                <label for="sexe">M</label>
                                <input type="radio" id="sexe" name="sexe" value="F">
                                <label for="sexe">F</label>
                            @error('sexe')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    <br>
                    <button type="submit" class="btn btn-secondary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
@endsection