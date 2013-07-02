@extends('_layouts.master')

@section('content')

@include('_partials.errors')

<h2>Signaler de nouvelles coordonées</h2>

{{ Form::open(['route' => 'city.store', 'class' => 'form-horizontal']) }}

  <div class="control-group">
    {{ Form::label('name', 'Nom de la ville :', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::text('name') }}
    </div>
  </div>

  <div class="control-group">
    {{ Form::label('xaxis', 'Coordonnées (x, y)* : ', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::text('xaxis', '', ['class' => 'input-mini']) }}
      {{ Form::text('yaxis', '', ['class' => 'input-mini']) }}
    </div>
  </div>

   <div class="control-group">
    {{ Form::label('player_id', 'Appartient à* :', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::select('player_id', $playerList) }}
      <a href="{{ route('player.create') }}" class="btn btn-primary btn-small"><i class="icon-plus icon-white"></i></a>
    </div>
  </div> 

  <div class="control-group">
    <div class="controls">
      <span class="help-block">*champ obligatoire</span>
    </div>
  </div>

  <div class="control-group">
    <div class="controls">
   {{ Form::submit('Ajouter', array('class' => 'btn btn-primary')) }}
    <a href="{{ route('city.index') }}" class="btn">Annuler</a>
    </div>
  </div>

{{ Form::close() }}

@stop