@extends('layouts.master')


@section('pageTitle')
	<title>Calavera Beats - Home</title>
@stop

@section('navbarElements')
	<li class="active"><a disabled>Home</a></li>
	<li ><a href="{{ URL::to('/beats'); }}">Beats</a></li>
	<li> <a href="{{ URL::to('/contact'); }}">Contacto</a> </li>
	<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
	<ul class="dropdown-menu" role="menu">
	  <li><a href="#">Action</a></li>
	  <li><a href="#">Another action</a></li>
	  <li><a href="#">Something else here</a></li>
	  <li class="divider"></li>
	  <li class="dropdown-header">Nav header</li>
	  <li><a href="#">Separated link</a></li>
	  <li><a href="#">One more separated link</a></li>
	</ul>
	</li>
@stop

@section('content')
	<div class="container">
		<!-- Mete dentro de este DIV todo lo que quieras -->
		<h1>HOME PAGE</h1>
	</div>
@stop