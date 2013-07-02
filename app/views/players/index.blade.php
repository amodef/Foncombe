@extends('_layouts.master')

@section('sidebar')
<ul class="nav nav-pills nav-stacked">
  <li><a href="{{ route('city.index') }}">Liste des cités</a></li>
  <li class="active"><a href="">Liste des joueurs</a></li>
  <li><a href="{{ route('ally.index') }}">Liste des alliances</a></li>
</ul>
@stop

@section('content')
@include('_partials.errors')
<h3>Liste des joueurs</h3>

<table id="playersIndex" class="table table-hover">
  <thead>
    <tr>
      <th>Nom <a href=""><i class="icon-chevron-down"></i></a></th>
      <th>Alliance <a href=""><i class="icon-chevron-down"></i></a></th>
      <th>Puissane <a href=""><i class="icon-chevron-down"></i></a></th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($players as $player)
    <tr>
      <td>{{ $player->name }}</td>
      <td><a href="{{ route('ally.show', $player->ally->id) }}">{{ $player->ally->name }}</a></td>
      <td>{{ $player->power }}</td>
      <td>
        {{ Form::open(['route' => ['player.destroy', $player->id], 'method' => 'delete', 'class' => 'form-inline', 'style' => 'margin-bottom:0;']) }}
          <a href="{{ route('player.edit', $player->id) }}"><i class="icon-pencil"></i></a>
          <button type="submit" href="{{ route('player.destroy', $player->id) }}" class="btn-mini btn-link"><i class="icon-trash"></i></button>
        {{ Form::close() }}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{-- $allies->links() --}}

<p><a href="{{ route('home') }}" class="btn">Retour</a></p>
@stop