<?php
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO modelo (marca_id_marca, nome_modelo, ano_fab_modelo, ano_mod_modelo, cor_modelo, placa_modelo) VALUES (".$_POST["marca_id_marca"].", '".$_POST["nome_modelo"]."', '".$_POST["ano_fab_modelo"]."', '".$_POST["ano_mod_modelo"]."', '".$_POST["cor_modelo"]."', '".$_POST["placa_modelo"]."')";
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Cadastro realizado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		case "editar":			
			$sql = "UPDATE modelo SET
						marca_id_marca=".$_POST["marca_id_marca"].",
						nome_modelo='".$_POST["nome_modelo"]."',
						ano_fab_modelo='".$_POST["ano_fab_modelo"]."',
						ano_mod_modelo='".$_POST["ano_mod_modelo"]."',
						cor_modelo='".$_POST["cor_modelo"]."', placa_modelo='".$_POST["placa_modelo"]."' 
					WHERE id_modelo=".$_REQUEST["id_modelo"];
					
			//var_dump($sql);
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM modelo WHERE id_modelo=".$_REQUEST["id_modelo"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
	}
?>
<p><a class="btn btn-primary" href="?page=listar-modelo">Listar</a></p>







