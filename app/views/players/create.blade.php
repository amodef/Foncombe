@extends('_layouts.master')

@section('content')

@include('_partials.errors')

<h2>Enregistrer un nouveau joueur</h2>

{{ Form::open(['route' => 'player.store', 'class' => 'form-horizontal']) }}

  <div class="control-group">
    {{ Form::label('name', 'Nom du joueur :', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::text('name') }}
    </div>
  </div>

  <div class="control-group">
    {{ Form::label('power', 'Puissance : ', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::text('power') }}
    </div>
  </div>

   <div class="control-group">
    {{ Form::label('ally_id', 'Alliance :', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::select('ally_id', $allyList) }}
      <a href="{{ route('ally.create') }}" class="btn btn-primary btn-small"><i class="icon-plus icon-white"></i></a>
    </div>
  </div> 

  <div class="control-group">
    <div class="controls">
   {{ Form::submit('Ajouter', array('class' => 'btn btn-primary')) }}
    <a href="{{ route('city.create') }}" class="btn">Annuler</a>
    </div>
  </div>

{{ Form::close() }}

@stop