@extends('_layouts.master')

@section('sidebar')
<ul class="nav nav-pills nav-stacked">
  <li><a href="{{ route('city.index') }}">Liste des cités</a></li>
  <li><a href="{{ route('player.index') }}">Liste des joueurs</a></li>
  <li class="active"><a href="">Liste des alliances</a></li>
</ul>
@stop

@section('content')
@include('_partials.errors')

<h3>Liste des alliances @include('_partials.add')</h3>
<table id="alliesIndex" class="table table-hover">
  <thead>
    <tr>
      <th>Alliance <a href=""><i class="icon-chevron-down"></i></a></th>
      <th>Puissane <a href=""><i class="icon-chevron-down"></i></a></th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($allies as $ally)
    <?php $ally->setPower() ?>
    <tr>
      <td><a href="{{ route('ally.show', $ally->id) }}">{{{ $ally->name }}}</a></td>
      <td>{{ $ally->power }}</td>
      <td>
        <a href="{{ route('ally.edit', $ally->id) }}"><i class="icon-pencil"></i></a>
        <a data-toggle="modal" href="#del{{ $ally->id }}"><i class="icon-trash"></i></a>
      </td>
    </tr>
    <div id="del{{ $ally->id }}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Prudence !</h3>
      </div>
      <div class="modal-body">
        <p>L'alliance <strong>{{ $ally->name }} ainsi que tous ses membres et leurs cités</strong> seront oubliés à tout jamais.<br>
        Êtes-vous certain de vouloir continuer ?</p>
      </div>
      <div class="modal-footer">
        {{ Form::open(['route' => ['ally.destroy', $ally->id], 'method' => 'delete', 'class' => 'form-inline', 'style' => 'margin-bottom:0;']) }}
          <a href="#" class="btn" data-dismiss="modal">Annuler</a>
          <button type="submit" href="{{ route('ally.destroy', $ally->id) }}" class="btn btn-danger">Supprimer</button>
        {{ Form::close() }}
      </div>
    </div>
    @endforeach
  </tbody>
</table>

{{-- $allies->links() --}}

<p><a href="{{ route('home') }}" class="btn">Retour</a></p>
@stop