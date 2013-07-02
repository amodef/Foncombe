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

<h3>Liste des joueurs @include('_partials.add')</h3>

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
      <td><a href="{{ route('player.show', $player->id) }}">{{ $player->name }}</a></td>
      <td><a href="{{ route('ally.show', $player->ally->id) }}">{{ $player->ally->name }}</a></td>
      <td>{{ $player->power }}</td>
      <td>
        <a href="{{ route('player.edit', $player->id) }}"><i class="icon-pencil"></i></a>
        <a data-toggle="modal" href="#del{{ $player->id }}"><i class="icon-trash"></i></a>
      </td>
    </tr>
    <div id="del{{ $player->id }}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Prudence !</h3>
      </div>
      <div class="modal-body">
        <p>Le joueur <strong>{{ $player->name }} ainsi que toutes ses cités</strong> seront oubliés à tout jamais.<br>
        Êtes-vous certain de vouloir continuer ?</p>
      </div>
      <div class="modal-footer">
        {{ Form::open(['route' => ['player.destroy', $player->id], 'method' => 'delete', 'class' => 'form-inline', 'style' => 'margin-bottom:0;']) }}
          <a href="#" class="btn" data-dismiss="modal">Annuler</a>
          <button type="submit" href="{{ route('player.destroy', $player->id) }}" class="btn btn-danger">Supprimer</button>
        {{ Form::close() }}
      </div>
    </div>
    @endforeach
  </tbody>
</table>

{{-- $allies->links() --}}

<p><a href="{{ route('home') }}" class="btn">Retour</a></p>
@stop