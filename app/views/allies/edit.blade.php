@extends('_layouts.master')

@section('content')

@include('_partials.errors')

<h2>Modifier les informations de l' alliance</h2>

{{ Form::model($ally, ['route' => ['ally.update', $ally->id], 'method' => 'PUT', 'class' => 'form-horizontal']) }}

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
   {{ Form::submit('Actualiser', array('class' => 'btn btn-primary')) }}
    <a href="{{ route('ally.index') }}" class="btn">Annuler</a>
    </div>
  </div>

{{ Form::close() }}

@stop