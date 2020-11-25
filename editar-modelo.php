<h1>Editar Modelo</h1>
<?php
	$sql = "SELECT * FROM modelo WHERE id_modelo=".$_REQUEST["id_modelo"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
	
	//print $_REQUEST["id_modelo"];
?>
<form action="?page=salvar-modelo" method="POST">
	<div class="form-group">
		<label>Nome da Marca</label>
		<?php
			$sql_2 = "SELECT * FROM marca";
			
			$res_2 = $conn->query($sql_2) or die($conn->error);
			
			$qtd_2 = $res_2->num_rows;
			
			if($qtd_2 > 0){
				print "<select name='marca_id_marca' class='form-control'>";
				while($row_2 = $res_2->fetch_object()){
					if(($row->marca_id_marca) == ($row_2->id_marca)){
						print "<option value='".$row_2->id_marca."' selected>".$row_2->nome_marca."</option>";
					}else{
						print "<option value='".$row_2->id_marca."'>".$row_2->nome_marca."</option>";
					}
				}
				print "</select>";
			}else{
				print "Não há dados cadastrados.";
			}
		?>
	</div>
	<div class="form-group">
		<label>Nome do Modelo</label>
		<input type="text" name="nome_modelo" class="form-control" value="<?php print $row->nome_modelo; ?>">
	</div>
	<div class="form-group">
		<label>Ano de Fabricação</label>
		<input type="number" name="ano_fab_modelo" class="form-control" value="<?php print $row->ano_fab_modelo; ?>">
	</div>
	<div class="form-group">
		<label>Ano do Modelo</label>
		<input type="number" name="ano_mod_modelo" class="form-control" value="<?php print $row->ano_mod_modelo; ?>">
	</div>
	<div class="form-group">
		<label>Cor</label>
		<input type="color" name="cor_modelo" value="<?php print $row->cor_modelo; ?>">
	</div>
	<div class="form-group">
		<label>Placa</label>
		<input type="text" name="placa_modelo" class="form-control" value="<?php print $row->placa_modelo; ?>">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="editar">
		<input type="hidden" name="id_modelo" value="<?php print $row->id_modelo; ?>">
		<button type="submit" class="btn btn-success">
			Editar
		</button>
	</div>
</form>




