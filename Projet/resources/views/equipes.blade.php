@extends('layouts.layout')

@section('titrePage')
    Liste des équipes
@endsection

@section('titreItem')
    <h1>Les équipes</h1>
@endsection

@section('contenu')

    @if(session()->has('info'))
        <div class="card text-white bg-success mb-3" style="max-wdith: 18rem;">
            <div class="card-body">
                <p class="card-text">{{ session('info') }}</p>
            </div>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <div class="content">
                <table class="table table-striped table-is-hoverable">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th></th>
                            @auth
                            <th><a class="btn btn-success" href="{{ route('equipes.create') }}">Créer équipe</a></th>
                            <th></th>
                            @endauth
                        </tr>
                    </thead>
                    @foreach($equipes as $equipe)
                        <tr>
                            <td><strong>{{ $equipe->nom }}</strong></td>
                            <td><a class="btn btn-primary" href="{{ route('equipes.show', $equipe->id) }}">Détails</a></td>
                            @auth
                            <td><a class="btn btn-warning" href="{{ route('equipes.edit', $equipe->id) }}">Modifier</a></td>
                            <td>
                                <form action="{{ route('equipes.destroy', $equipe->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                            @endauth
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection