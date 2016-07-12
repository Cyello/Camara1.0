@extends('layout.principal')

@section('conteudo')

	<h1>Sessões</h1>

	<table class="table">
		<caption>Sessões</caption>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Tipo</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($sessoes as $s)
			<tr>
				<td>{{$s->nome}}</td>
				<td>{{$s->tipo}}</td>
				<td>
					<a href="{!! route('group.sessao.show', $s->id) !!}">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</a>
				</td> <!--Link para as descriçoes de cada sessão-->

				<td>
					<a href="{!! route('group.sessao.edit', $s->id) !!}">
						<span class="glyphicon glyphicon-pencil"></span>
					</a>
				</td> <!-- Link para editar um sessão -->

				<td>
					<a href="{!! route('group.sessao.destroy', $s->id) !!}">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td> <!-- Link para remover um sessão-->
			</tr>
			@endforeach
		</tbody>
	</table>
	
	<a class="btn btn-primary" href="{!! route('group.sessao.create') !!}">
		<span class="glyphicon glyphicon-plus"></span> 
		Sessão
	</a></br>  <!--Link para adicionar nova sessão-->

@stop