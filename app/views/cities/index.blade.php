@extends('_layouts.master')

@section('content')

@include('_partials.errors')

<h3>Liste des cités connues</h3>

<table id="citiesIndex" class="table table-hover">
  <thead>
    <tr>
      <th>Nom <a href="#"><i class="icon-chevron-down"></i></a></th>
      <th>Coordonnées <a href="#"><i class="icon-chevron-down"></i></a></th>
      <th>Joueur <a href="#"><i class="icon-chevron-down"></i></a></th>
      <th>Alliance <a href="#"><i class="icon-chevron-down"></i></a></th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cities as $city)
    <tr>
      <td>{{ $city->name }}</td>
      <td>({{ $city->xaxis }}, {{ $city->yaxis }})</td>
      <td><a href="{{ route('player.show', $city->player->id) }}">{{ $city->player->name }}</a></td>
      <td><a href="{{ route('ally.show', $city->player->ally->id) }}">{{ $city->player->ally->name }}</a></td>
      <td>
        {{ Form::open(['route' => ['city.destroy', $city->id], 'method' => 'delete', 'class' => 'form-inline', 'style' => 'margin-bottom:0;']) }}
          <a href="{{ route('city.edit', $city->id) }}"><i class="icon-pencil"></i></a>
          <button type="submit" href="{{ route('city.destroy', $city->id) }}" class="btn-mini btn-link"><i class="icon-trash"></i></button>
        {{ Form::close() }}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{-- $cities->links() --}}

<p><a href="{{ route('home') }}" class="btn">Retour</a></p>
@stop