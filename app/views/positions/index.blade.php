@extends('_layouts.master')

@section('content')

@include('_partials.errors')

<h1>Liste des positions connues</h1>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Joueur</th>
      <th>Alliance</th>
      <th>x</th>
      <th>y</th>
      <th>Puissance</th>
    </tr>
  </thead>
  <tbody>
    @foreach($positions as $position)
    <tr>
      <td>{{ $position->name }}</td>
      <td>{{ $position->ally }}</td>
      <td>{{ $position->xaxis }}</td>
      <td>{{ $position->yaxis }}</td>
      <td>{{ $position->power }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<p><a href="{{ route('home') }}" class="btn">Retour</a></p>
@stop