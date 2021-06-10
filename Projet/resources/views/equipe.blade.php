@extends('layouts.layout')

@section('titrePage')
    Information sur l'équipe
@endsection

@section('titreItem')
    <h3>Information équipe</h3>
@endsection

@section('contenu')
    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">Nom de l'équipe : {{ $equipe->nom }}</h5>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table table-striped table-is-hoverable">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($equipe->adherents as $adherent)
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