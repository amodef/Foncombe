@extends('_layouts.master')

@section('content')

@include('_partials.errors')

<h2>Signaler de nouvelles coordonées</h2>

{{ Form::open(['route' => 'positions.store', 'class' => 'form-horizontal']) }}

  <div class="control-group">
    {{ Form::label('name', 'Nom du joueur :', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::text('name') }}
    </div>
  </div>

  <div class="control-group">
    {{ Form::label('ally', 'Nom de l\'alliance :', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::text('ally') }}
    </div>
  </div>

  <div class="control-group">
    {{ Form::label('xaxis', 'Coordonnées (x, y) : ', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::text('xaxis', '', ['class' => 'input-mini']) }}
      {{ Form::text('yaxis', '', ['class' => 'input-mini']) }}
    </div>
  </div>

  <div class="control-group">
    {{ Form::label('power', 'Puissance :', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::text('power') }}
    </div>
  </div>

  <div class="control-group">
    <div class="controls">
   {{ Form::submit('Ajouter', array('class' => 'btn btn-primary')) }}
    <a href="{{ route('home') }}" class="btn">Annuler</a>
    </div>
  </div>

{{ Form::close() }}

@stop