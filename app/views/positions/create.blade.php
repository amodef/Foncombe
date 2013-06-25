@extends('_layouts.master')

@section('content')

@include('_partials.errors')

<h2>Signaler de nouvelles coordonées</h2>

{{ Form::open(array('route' => 'positions.store')) }}

  {{ Form::label('name', 'Nom du joueur :') }}
  {{ Form::text('name') }}<br>

  {{ Form::label('ally', 'Nom de l\'alliance :') }}
  {{ Form::text('ally') }}<br>

  {{ Form::label('xaxis', 'x : ') }}
  {{ Form::text('xaxis') }}<br>

  {{ Form::label('yaxis', 'y : ') }}
  {{ Form::text('yaxis') }}<br>

  {{ Form::label('power', 'Puissance :') }}
  {{ Form::text('power') }}<br>

  {{ Form::submit('Ajouter', array('class' => 'btn btn-primary')) }}
  <a href="{{ route('home') }}" class="btn">Annuler</a>

{{ Form::close() }}

@stop