@extends('_layouts.master')

@section('content')

@include('_partials.errors')

<h2>Enregistrer une nouvelle alliance</h2>

{{ Form::open(['route' => 'ally.store', 'class' => 'form-horizontal']) }}

  <div class="control-group">
    {{ Form::label('name', 'Nom de l\'alliance* :', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::text('name') }}
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
    <a href="{{ route('city.create') }}" class="btn">Annuler</a>
    </div>
  </div>

{{ Form::close() }}

@stop