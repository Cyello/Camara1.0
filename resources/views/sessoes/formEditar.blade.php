@extends('layout.principal')

@section('conteudo')
	
	<form role="form" action="{!! route('group.sessao.update', $s->id) !!}" method="post" name="editForm">

	  <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>

	  <div class="form-group">
	    <label for="id_nome">Nome</label>
	    <input type="text" class="form-control" id="id_nome" name="nome" value="{{$s->nome}}" placeholder="Nome da sessão">
	  </div>

	  <div class="form-group">
		<label for="id_tipo">Tipo da sessão</label>
		<input type="text" class="form-control" id="id_tipo" name="tipo" placeholder="Digite o tipo da sessão aqui" value="{{$s->tipo}}">
	  </div>

	  <div class="form-group">
	    <label for="id_data">Nova data</label>
	    <input type="date" class="form-control" id="id_data" name="data" value="{{$s->data}}">
	  </div>

	  <div class="form-group">
		<label for="id_desc">Descrição</label>
		<textarea name="desc" id="id_desc" class="form-control" placeholder="Fale sobre a sessao aqui">{{$s->desc}}</textarea>
	  </div>

	  <input class="btn btn-defaut" type="submit" value="Salvar">
		
	 </form>

@stop