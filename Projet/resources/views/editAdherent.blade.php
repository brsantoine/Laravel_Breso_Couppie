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
            <h4 class="card-header">Créer un joueur</h4>
            <div class="card-body">
                <form action="{{ route('adherents.update',$adherent->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <br>
                        <div class="form-group">
                            <label for="club_id">Club : </label>
                            @foreach($clubs as $club)
                                <input type="radio" id="club_id" name="club_id" value="{{$club->id}}" @if ($adherent->club_id == $club->id) checked @endif>
                                <label for="club_id">{{$club->nom}}</label>
                            @endforeach
                            @error('club_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" value="{{ old('nom', $adherent->nom) }}" placeholder="Nom de l'adhérent">
                                @error('nom')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" id="prenom" value="{{ old('prenom', $adherent->prenom) }}" placeholder="Prénom de l'adhérent">
                                @error('prenom')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    <br>
                        <div class="form-group">
                            <input type="number" class="form-control @error('age') is-invalid @enderror" name="age" id="age" value="{{ old('age', $adherent->age) }}" placeholder="Âge de l'adhérent">
                                @error('age')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    <br>
                        <div class="form-group">
                            <label for="sexe">Sexe : </label>
                                <input type="radio" id="sexe" name="sexe" value="M" @if ($adherent->sexe == 'M') checked @endif>
                                <label for="sexe">M</label>
                                <input type="radio" id="sexe" name="sexe" value="F" @if ($adherent->sexe == 'F') checked @endif>
                                <label for="sexe">F</label>
                            @error('sexe')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    <br>

                        <div class="form-group">
                            <label for="club_id">Équipes : (ne fonctionne pas)</label>
                            @foreach($equipesClub as $equipe)
                                <input type="checkbox" id="id" name="id[]" value="{{$equipe->id}}" @if (in_array($equipe->id, $equipesAdherent)) checked @endif>
                                <label for="id">{{$equipe->nom}}</label>
                            @endforeach
                            @error('id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    <br>
                    <button type="submit" class="btn btn-secondary">Modifier</button>
                </form>
            </div>
        </div>
    </div>
@endsection