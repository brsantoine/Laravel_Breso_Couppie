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
            <h4 class="card-header">Modifier une équipe</h4>
            <div class="card-body">
                <form action="{{ route('equipes.update',$equipe->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <br>
                        <div class="form-group">
                        <label for="club_id">Club : </label>
                            @foreach($clubs as $club)
                                <!--<option value="{{$club->id}}">{{$club->nom}}</option>-->
                                <input type="radio" id="club_id" name="club_id" value="{{$club->id}}" @if ($equipe->club_id == $club->id) checked @endif>
                                <label for="club_id">{{$club->nom}}</label>
                            @endforeach
                            @error('club_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nom">Nom équipe</label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" 
                                id="nom" value="{{ old('nom', $equipe->nom) }}" placeholder="Nom de l'équipe">
                                @error('nom')
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