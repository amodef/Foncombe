@extends('_layouts.master')

@section('content')

@include('_partials.errors')

<h2>Mise à jour des informations du joueur @include('_partials.add')</h2>

{{ Form::model($player, ['route' => ['player.update', $player->id], 'method' => 'PUT', 'class' => 'form-horizontal']) }}

  <div class="control-group">
    {{ Form::label('name', 'Nom du joueur* :', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::text('name') }}
    </div>
  </div>

  <div class="control-group">
    {{ Form::label('power', 'Puissance* : ', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::text('power') }}
    </div>
  </div>

   <div class="control-group">
    {{ Form::label('ally_id', 'Alliance* :', ['class' => 'control-label']) }}
    <div class="controls">
      {{ Form::select('ally_id', $allyList) }}
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
    <a href="{{ route('player.index') }}" class="btn">Annuler</a>
    </div>
  </div>

{{ Form::close() }}

@stop