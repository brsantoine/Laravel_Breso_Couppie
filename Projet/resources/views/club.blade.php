@extends('layouts.layout')

@section('titrePage')
    Information sur le club
@endsection

@section('titreItem')
    <h3>Information club</h3>
@endsection

@section('contenu')
    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">Club {{ $club->nom }}</h5>
            <h6 class="card-header-title">Ses équipes</h6>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table-is-hoverable">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($equipes as $equipe)
                        <tr>
                            <td><strong>{{ $equipe->nom }}</strong></td>
                            <td><a class="btn btn-primary" href="{{ route('equipes.show', $equipe->id) }}">Détails</a></td>
                            <!--<td>
                                <form action="{{ route('equipes.destroy', $equipe->id) }}" method="post">
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