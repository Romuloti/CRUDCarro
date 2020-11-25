<h1>Cadastrar Modelo</h1>
<form action="?page=salvar-modelo" method="POST">
	<div class="form-group">
		<label>Nome da Marca</label>
		<?php
			$sql = "SELECT * FROM marca";
			
			$res = $conn->query($sql) or die($conn->error);
			
			$qtd = $res->num_rows;
			
			if($qtd > 0){
				print "<select name='marca_id_marca' class='form-control'>";
				
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_marca."'>".$row->nome_marca."</option>";
				}
				print "</select>";
			}else{
				print "Não há dados cadastrados.";
			}
		?>
	</div>
	<div class="form-group">
		<label>Nome do Modelo</label>
		<input type="text" name="nome_modelo" class="form-control">
	</div>
	<div class="form-group">
		<label>Ano de Fabricação</label>
		<input type="number" name="ano_fab_modelo" class="form-control">
	</div>
	<div class="form-group">
		<label>Ano do Modelo</label>
		<input type="number" name="ano_mod_modelo" class="form-control">
	</div>
	<div class="form-group">
		<label>Cor</label>
		<input type="color" name="cor_modelo">
	</div>
	<div class="form-group">
		<label>Placa</label>
		<input type="text" name="placa_modelo" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="cadastrar">
		<button type="submit" class="btn btn-success">
			Enviar
		</button>
	</div>
</form>




