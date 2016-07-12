@extends('layout.principal')

@section('conteudo')

	<h1>Projetos</h1>

	<table class="table">
		<caption>Projetos Aprovados</caption>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Tipo</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($projetos as $p)
			<tr>
				<td>{{$p->nome}}</td>
				<td>{{$p->tipo}}</td>

				
				<td>
					<a href="{!! route('group.projeto.show', $p->id) !!}">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</a>
				</td> <!--Link para as descriçoes de cada projeto-->

				<td>
					<a href="{!! route('group.projeto.edit', $p->id) !!}">
						<span class="glyphicon glyphicon-pencil"></span>
					</a>
				</td> <!-- Link para editar um projeto -->

				<td>
					<a href="{!! route('group.projeto.destroy', $p->id) !!}">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td> <!-- Link para remover um projeto-->

			</tr>
			@endforeach
		</tbody>
	</table>

	
	
	<a class="btn btn-primary" href="{!! route('group.projeto.create') !!}">
		<span class="glyphicon glyphicon-plus"></span> 
		Projeto
	</a></br>  <!--Link para adicionar novo projeto-->

@stop