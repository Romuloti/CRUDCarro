<h1>Editar Marca</h1>
<?php
	$sql = "SELECT * FROM marca WHERE id_marca=".$_REQUEST["id_marca"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar-marca" method="POST">
	<div class="form-group">
		<label>Nome da Marca</label>
		<input type="text" name="nome_marca" class="form-control" value="<?php print $row->nome_marca; ?>">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="editar">
		<input type="hidden" name="id_marca" value="<?php  print $row->id_marca; ?>">
		<button type="submit" class="btn btn-success">
			Enviar
		</button>
	</div>
</form>