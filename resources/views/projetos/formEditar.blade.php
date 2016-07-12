@extends('layout.principal')

@section('conteudo')
	
	<form role="form" action="{!! route('group.projeto.update', $p->id) !!}" method="post" name="editForm">

	  <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>

	  <div class="form-group">
	    <label for="id_nome">Nome</label>
	    <input type="text" class="form-control" id="id_nome" name="nome" value="{{$p->nome}}" placeholder="Nome do projeto">
	  </div>

	  <div class="form-group">
		<label for="id_tipo">Tipo de projeto</label>
		<input type="text" class="form-control" id="id_tipo" name="tipo" placeholder="Digite o tipo de projeto" value="{{$p->tipo}}">
	  </div>

	  <div class="form-group">
	    <label for="id_nome">Criador</label>
	    <input type="text" class="form-control" id="id_criador" name="criador" value="{{$p->criador}}" placeholder="Digite o criador do projeto aqui">
	  </div>

	<div class="form-group">
		<label for="id_desc">Descrição</label>
		<textarea name="desc" id="id_desc" class="form-control" placeholder="Fale sobre o projeto aqui">{{$p->desc}}</textarea>
	</div>

	 <div class="form-group">
		  <label for="id_sel">Sessão</label>
		  <select class="form-control" id="id_sel" name="sessao_id">
		  	<option value="{{$p->sessao_id}}" SELECTED>{{$sessaoAtual}}</option>
			@foreach($sessoes as $s)
				@if($sessaoAtual != $s->nome)
					<option value="{{$s->id}}">{{$s->nome}}</option>
				@endif
			@endforeach
		  </select>
   	 </div>

	  <input class="btn btn-defaut" type="submit" value="Salvar">
		
	 </form>

@stop