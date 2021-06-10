@extends('layouts.layout')

@section('titrePage')
    Information sur le match
@endsection

@section('titreItem')
    <h3>Information match</h3>
@endsection

@section('contenu')
    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">{{ $equipeA->nom . ' ' . $match->score . ' ' . $equipeB->nom }}</h5>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table table-striped table-is-hoverable">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($match->adherents as $adherent)
                        <tr>
                            <td><strong>{{ $adherent }}</strong></td>
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