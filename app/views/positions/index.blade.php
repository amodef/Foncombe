@extends('_layouts.master')

@section('content')

@include('_partials.errors')

<h3>Liste des positions connues</h3>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Joueur</th>
      <th>Alliance</th>
      <th>Coordonnées</th>
      <th>Puissance</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($positions as $position)
    <tr>
      <td>{{ $position->name }}</td>
      <td>{{ $position->ally }}</td>
      <td>({{ $position->xaxis }}, {{ $position->yaxis }})</td>
      <td>{{ $position->power }}</td>
      <td>
        {{ Form::open(['route' => ['positions.destroy', $position->id], 'method' => 'delete', 'class' => 'form-inline', 'style' => 'margin-bottom:0;']) }}
          <a href="{{ route('positions.edit', $position->id) }}"><i class="icon-pencil"></i></a>
          <button type="submit" href="{{ route('positions.destroy', $position->id) }}" class="btn-mini btn-link"><i class="icon-trash"></i></button>
        {{ Form::close() }}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<p><a href="{{ route('home') }}" class="btn">Retour</a></p>
@stop