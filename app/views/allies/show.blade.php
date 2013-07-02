@extends('_layouts.master')

@section('content')

@include('_partials.errors')

<h3>{{ $ally->name }}</h3>

  <h4>Puissance totale</h4>
  <p>{{ $ally->power }}</p>

  <h4>Liste des membres</h4>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>Nom</th>
      <th>Puissance</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ally->players as $player)
    <tr>
      <td><a href="{{ route('player.show', $player->id) }}">{{ $player->name }}</a></td>
      <td>{{ $player->power }}</td>
    <tr>
    @endforeach
  </tbody>
</table>

<p><a href="{{ route('ally.index') }}" class="btn">Retour</a></p>
@stop