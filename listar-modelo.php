<h1>Listar Modelos</h1>
<?php
	$sql = "SELECT ma.*, mo.* FROM modelo AS mo
			INNER JOIN marca AS ma
			ON ma.id_marca = mo.marca_id_marca
			ORDER BY mo.id_modelo";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "Encontrei <b>".$qtd."</b> resultado(s)";
		print "<table class='table table-striped table-hover table-bordered'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Marca</th>";
		print "<th>Nome do Modelo</th>";
		print "<th>Ano de Fab</th>";
		print "<th>Ano do Modelo</th>";
		print "<th>Cor</th>";
		print "<th>Placa</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_modelo."</td>";
			print "<td>".$row->nome_marca."</td>";
			print "<td>".$row->nome_modelo."</td>";
			print "<td>".$row->ano_fab_modelo."</td>";
			print "<td>".$row->ano_mod_modelo."</td>";
			print "<td bgcolor='".$row->cor_modelo."'></td>";
			print "<td>".$row->placa_modelo."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=editar-modelo&id_modelo=".$row->id_modelo."';\" >Editar</button>
						
						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-modelo&acao=excluir&id_modelo=".$row->id_modelo."';}else{false;}\">Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não há dados cadastrados.";
	}
?>







