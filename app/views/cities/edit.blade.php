@extends('_layouts.master')

@section('content')

@include('_partials.errors')

<h2>Mise à jour des coordonnées @include('_partials.add')</h2>

{{ Form::model($city, ['route' => ['city.update', $city->id], 'method' => 'PUT', 'class' => 'form-horizontal']) }}

  <div class="control-group">
    {{ Form::label('name', 'Nom de la ville :', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::text('name') }}
    </div>
  </div>

  <div class="control-group">
    {{ Form::label('xaxis', 'Coordonnées (x, y) : ', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::text('xaxis', $city->xaxis, ['class' => 'input-mini']) }}
      {{ Form::text('yaxis', $city->yaxis, ['class' => 'input-mini']) }}
    </div>
  </div>

   <div class="control-group">
    {{ Form::label('player_id', 'Appartient à :', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::select('player_id', $playerList) }}
    </div>
  </div> 

  <div class="control-group">
    <div class="controls">
   {{ Form::submit('Actualiser', array('class' => 'btn btn-primary')) }}
    <a href="{{ route('home') }}" class="btn">Annuler</a>
    </div>
  </div>

{{ Form::close() }}

@stop