@extends('_layouts.master')

@section('sidebar')
<ul class="nav nav-pills nav-stacked">
  <li class="active"><a href="">Liste des cités</a></li>
  <li><a href="{{ route('player.index') }}">Liste des joueurs</a></li>
  <li><a href="{{ route('ally.index') }}">Liste des alliances</a></li>
</ul>
@stop

@section('content')
@include('_partials.errors')

<h3>Liste des cités connues @include('_partials.add')</h3>

<table id="citiesIndex" class="table table-hover">
  <thead>
    <tr>
      <th>Joueur <a href=""><i class="icon-chevron-down"></i></a></th>
      <th>Coordonnées <a href=""><i class="icon-chevron-down"></i></a></th>
      <th>Alliance <a href=""><i class="icon-chevron-down"></i></a></th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cities as $city)
    <tr>
      <td><a href="{{ route('player.show', $city->player->id) }}">{{ $city->player->name }}</a></td>
      <td>({{ $city->xaxis }}, {{ $city->yaxis }})</td>
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