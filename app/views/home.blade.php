@extends('_layouts.master')

@section('content')

<h1>Bienvenue sur le site de Foncombe !</h1>


<h3>Gestion des coordonnées ennemies</h3>

<p>
  <ul>
    <li><a href="{{ route('city.index') }}">Consulter la liste des coordonnées</a></li>
    <li><a href="{{ route('city.create') }}">Ajouter une coordonnée</a></li>
  </ul>
</p>

<p><span class="label label-info">Info</span> Pour signaler un bug ou faire part d'une suggestion, veuillez vous rendre à <a href="https://github.com/amodef/Foncombe/issues/new">cette adresse</a>.</p>

@stop