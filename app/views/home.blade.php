@extends('_layouts.master')

@section('content')

<h1>Bienvenue sur le site de Foncombe !</h1>

<h2>Gestion des coordonnées ennemies</h2>

<p>Consulter la liste des coordonnées</p>
<p><a href="{{ route('positions.create') }}">Ajouter une coordonnée</a></p>

@stop