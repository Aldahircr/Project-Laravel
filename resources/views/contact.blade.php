
@extends('layout')
@section('title', 'Contact')

@section('content')
	<h1>{{ __('Contact')}}</h1>
<!-- Buscar una traduccion con esas llaves, si no lo encuentra mostrat la cadena de caracteres  -->


<form method="POST" action= "{{ route ('messages.store')}}" >

	@CSRF

	<input name="name" placeholder="Nombre.." value="{{old('name')}}"><br>
	{!! $errors ->first('name', '<small>:message</samall><br>') !!}

	<input text="email" name="email" placeholder="Email.." value="{{old('email')}}"><br>
	{!! $errors ->first('email', '<small>:message</samall><br>') !!}

	<input name="subject" placeholder="Asunto" value="{{old('subject')}}"><br>
	{!! $errors ->first('subject', '<small>:message</samall><br>') !!}

	<textarea name="content" placeholder="Mensaje">{{old('content')}}</textarea><br>

	{!! $errors ->first('content', '<small>:message</samall><br>') !!}

	<button>Enviar</button>

</form>


@endsection