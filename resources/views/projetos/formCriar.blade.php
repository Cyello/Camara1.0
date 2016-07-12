
@extends('layout.principal')

@section('conteudo')

<form enctype="multipart/form-data" action="{!! route('group.projeto.store') !!}" method="POST">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<div class="row">
		<div class="col-xs-5">
			<div class="form-group">
				<label for="id_nome">Nome do Projeto</label>
				<input type="text" class="form-control" id="id_nome" name="nome" placeholder="Nome do projeto" ng-model="nome" ng-required="true">
			</div>

			<div ng-show="criarForm.nome.$invalid && criarForm.nome.$dirty" class="alert alert-danger">
				<strong>Aviso!</strong> Por favor, preencha o campo nome do projeto
			</div>

			<div class="form-group">
				<label for="id_tipo">Tipo de projeto</label>
				<input type="text" class="form-control" id="id_tipo" name="tipo" placeholder="Digite o tipo de projeto" ng-model="tipo" ng-required="true">
			</div>

			<div ng-show="criarForm.tipo.$invalid && criarForm.tipo.$dirty" class="alert alert-danger">
				<strong>Aviso!</strong> Por favor, preencha o campo tipo
			</div>
			<div class="form-group">
				<label for="id_desc">Descrição</label>
				<textarea name="desc" id="id_desc" class="form-control" ng-model="email" ng-required="true" placeholder="Fale sobre o projeto aqui">Descrição</textarea>
			</div>
			<div ng-show="criarForm.desc.$invalid && criarForm.desc.$dirty" class="alert alert-danger">
				<strong>Aviso!</strong> Por favor, preencha a descrição
			</div>

			<div class="form-group">
			  <label for="id_sel">Sessão</label>
			  <select class="form-control" id="id_sel" name="sessao_id">
			  	<option SELECTED disabled>Sessões disponiveis</option>
				@foreach($sessoes as $s)
					<option value="{{$s->id}}">{{$s->nome}}</option>
				@endforeach
			  </select>
			</div>

			<div class="form-group">
			  Adicionar vereadores a este projeto <br>
			  @foreach($vereador as $v)
			 	 <input type="checkbox" name="ver[]" value="{{$v->id}}">{{$v->nome}}<br>
			  @endforeach
			</div>


			<br>
			 <input class="btn btn-default" type="submit" value="enviar" ng-disabled="criarForm.$invalid">

		</div>		
 
	</div>		

</form>


@stop
		 
			

