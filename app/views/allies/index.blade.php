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
<h3>Liste des alliances</h3>

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
    <tr>
      <td><a href="{{ route('ally.show', $ally->id) }}">{{ $ally->name }}</a></td>
      <td>{{ $ally->power }}</td>
      <td>
        {{ Form::open(['route' => ['ally.destroy', $ally->id], 'method' => 'delete', 'class' => 'form-inline', 'style' => 'margin-bottom:0;']) }}
          <a href="{{ route('ally.edit', $ally->id) }}"><i class="icon-pencil"></i></a>
          <button type="submit" href="{{ route('ally.destroy', $ally->id) }}" class="btn-mini btn-link"><i class="icon-trash"></i></button>
        {{ Form::close() }}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{-- $allies->links() --}}

<p><a href="{{ route('home') }}" class="btn">Retour</a></p>
@stop