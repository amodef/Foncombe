@extends('_layouts.master')

@section('content')

@include('_partials.errors')

<h3>{{ $player->name }}</h3>

  <h4>Alliance</h4>
  <a href="{{ route('ally.show', $player->ally->id) }}">{{ $player->ally->name }}</a>

  <h4>Puissance</h4>
  {{ $player->power }}

  <h4>Cités</h4>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>Nom</th>
      <th>Coordonnées</th>
    </tr>
  </thead>
  <tbody>
    @foreach($player->cities as $city)
    <tr>
      <td>{{ $city->name }}</td>
      <td>({{ $city->xaxis }}, {{ $city->yaxis }})</td>
    <tr>
    @endforeach
  </tbody>
</table>

<p><a href="{{ URL::previous() }}" class="btn">Retour</a></p>
@stop