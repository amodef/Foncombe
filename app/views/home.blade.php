@extends('_layouts.master')

@section('content')

<h1>Bienvenue sur le site de Foncombe !</h1>

<h3>Gestion des coordonnées ennemies</h3>

<ul>
  <li><a href="{{ route('positions.index') }}">Consulter la liste des coordonnées</a></li>
  <li><a href="{{ route('positions.create') }}">Ajouter une coordonnée</a></li>
</ul>

@stop