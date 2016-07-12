@extends('layout.principal')

@section('conteudo')

	<h4>{{$sessoes->nome}}</h4> 
	Tipo: {{$sessoes->tipo}}
	<p>{{$sessoes->desc}}</p>
	Data: {{$sessoes->data}}

	<h4>Projetos Pertencentes a sessão</h4>

	@foreach($projetos as $p)
		{{$p}}
		<br>
	@endforeach

@stop