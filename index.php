<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<title>Carros</title>
	</head>
    <body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Carros</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Marcas
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="?page=listar-marca">Listar Marcas</a>
						<a class="dropdown-item" href="?page=cad-marca">Cadastrar Marca</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Modelos
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="?page=listar-modelo">Listar Modelos</a>
						<a class="dropdown-item" href="?page=cad-modelo">Cadastrar Modelo</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php
					include("config.php");
					switch(@$_REQUEST["page"]){
						case "cad-marca":
							include("cad-marca.php");
						break;
						case "listar-marca":
							include("listar-marca.php");
						break;
						case "editar-marca":
							include("editar-marca.php");
						break;
						case "salvar-marca":
							include("salvar-marca.php");
						break;
						case "cad-modelo":
							include("cad-modelo.php");
						break;
						case "listar-modelo":
							include("listar-modelo.php");
						break;
						case "editar-modelo":
							include("editar-modelo.php");
						break;
						case "salvar-modelo":
							include("salvar-modelo.php");
						break;
						default:
							include("main.php");
					}
				?>
			</div>
		</div>
	</div>
    
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>


