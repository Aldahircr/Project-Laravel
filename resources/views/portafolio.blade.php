
@extends('layout')

@section('title', 'Portafolio')

@section('content')
	<h1>portafolio</h1>


	<ul>
		@forelse($portafolio as $portfolioItem)

			<li> {{ $portfolioItem['title'] }} </li>
		@empty
		<li>No hay proyecto para mostrar</li>
		@endforelse
	</ul>
@endsection