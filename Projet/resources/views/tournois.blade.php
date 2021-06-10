@extends('layouts.layout')

@section('titrePage')
    Liste des tournois
@endsection

@section('titreItem')
    <h1>Les Tournois</h1>
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
                <table class="table-is-hoverable">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Date début</th>
                            <th>Date fin</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($tournois as $tournoi)
                        <tr>
                            <td><strong>{{ $tournoi->nom }}</strong></td>
                            <td>{{ $tournoi->datedebut }}</td>
                            <td>{{ $tournoi->datefin }}</td>
                            <td><a class="btn btn-primary" href="{{ route('tournois.show', $tournoi->id) }}">Voir matchs</a></td>
                            <!--<td>
                                <form action="{{ route('tournois.destroy', $tournoi->id) }}" method="post">
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