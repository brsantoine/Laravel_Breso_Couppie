@extends('layouts.layout')

@section('titrePage')
    Information sur le tournoi
@endsection

@section('titreItem')
    <h3>Détails des matchs du tournoi</h3>
@endsection

@section('contenu')
    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">{{ $tournoi->nom }}</h5>
            <h6 class="card-header-title">Ses matchs</h6>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table table-striped table-is-hoverable">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Score</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($matches as $match)
                        <tr>
                            <td><strong>{{ $match->date }}</strong></td>
                            @if ($match->date > $today)
                            <td><strong>À venir</strong></td>
                            @else
                            <td><strong>{{ $match->score }}</strong></td>
                            @endif
                            <td><a class="btn btn-primary" href="{{ route('matches.show', $match->id) }}">Détails</a></td>
                            <!--<td>
                                <form action="{{ route('matches.destroy', $match->id) }}" method="post">
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