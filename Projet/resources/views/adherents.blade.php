@extends('layouts.layout')

@section('titrePage')
    Liste des joueurs
@endsection

@section('titreItem')
    <h1>Les joueurs</h1>
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
                            <th>Prenom</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($adherents as $adherent)
                        <tr>
                            <td>{{ $adherent->nom }}</td>
                            <td>{{ $adherent->prenom }}</td>
                            <td><a class="btn btn-primary" href="{{ route('adherents.show', $adherent->id) }}">Détails</a></td>
                            <!--<td>
                                <form action="{{ route('adherents.destroy', $adherent->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                </form>
                            </td>-->
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection