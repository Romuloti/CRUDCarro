<h1>Cadastrar Marca</h1>
<form action="?page=salvar-marca" method="POST">
	<div class="form-group">
		<label>Nome da Marca</label>
		<input type="text" name="nome_marca" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="cadastrar">
		<button type="submit" class="btn btn-success">
			Enviar
		</button>
	</div>
</form>