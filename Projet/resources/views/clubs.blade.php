@extends('layouts.layout')

@section('titrePage')
    Liste des clubs
@endsection

@section('titreItem')
    <h1>Les clubs</h1>
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
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($clubs as $club)
                        <tr>
                            <td><strong>{{ $club->nom }}</strong></td>
                            <td><a class="btn btn-primary" href="{{ route('clubs.show', $club->id) }}">Détails</a></td>
                            <!--<td>
                                <form action="{{ route('clubs.destroy', $club->id) }}" method="post">
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