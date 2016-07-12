@extends('layout.principal')

@section('conteudo')

	<h4>{{$projeto->nome}}</h4> 
	<p>{{$projeto->desc}}</p>
	Criador: {{$projeto->criador}}<br>
	Sessao: {{$sessao->nome}} - {{$sessao->data}}

	<br>

	Donos:
	@foreach ($vereadores as $v)
		{{$v->nome}},
	@endforeach


	<br>
	<br>
	<br>

	<?php $total = 0 ?>
	<h4>Votantes</h4>
	@foreach ($votos as $v)
		<?php ++$total; ?>
		{{$v->nome}} - 
		@if($v->tipo == 1)
			Sim
		@else
			@if($v->tipo == 2)
				Não
			@else
				Abstenção
			@endif
		@endif
		<br>
	@endforeach

	<br>
	<br>

	@foreach($projetoN as $p)
		@if($p->valor > 0)
			O projeto poderá ser votado somente em: {{$sessao->data}}
		@else
			@foreach($projetoA as $p)
				@if($p->valor > 0 )
					<h4>Sessão aberta</h4> 
					Vereadores que irão votar na sessão: <br>
					@foreach($verSes as $vs)
						-{{$vs->nome}} - <a href="/camara/projetos/votar/{{$vs->id}}/{{$projeto->id}}" title="">votar</a><br>
					@endforeach
				@else
					Total de votos: {{$total}}
				@endif
			@endforeach
		@endif
	@endforeach





@stop