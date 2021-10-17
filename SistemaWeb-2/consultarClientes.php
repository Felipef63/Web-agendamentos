<?php
require_once("controle/ControleCadastro.php");
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<!--<link rel="stylesheet" href="css/index.css">-->
		
        <title>Sistema de Gerenciamento - Clientes</title> 
	</head> 
	
	<body>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12">
					<a class="navbar-brand" href="#">SISTEMA WEB</a>
					<button class="navbar navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>	
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item=">
								<a class="nav-link" href="index.php">Cadastrar<span class="sr-only"></span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Consulta</a>
							</li>
						</ul>
					</div>
				</nav>  
			</div>
		<div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body">
					<h5 class="card-title">Consultar - Contatos Agendados</h5>
					<table class="table table-responsive" style="width: auto;">
						<thead>
							<tr>
								<th scope="col">Nome</th>
								<th scope="col">Telefone</th>
								<th scope="col">Origem</th>
								<th scope="col">Contato</th>
								<th scope="col">Observação</th>
								<th scope="col">Ação</th>
							</tr>
						</thead>
						<tbody id="TableData">
						<?php
							$controller = new CadastroController();
							$resultado = $controller->listar(0);
							//print_r($resultado);
							for($i=0; $i<count($resultado);$i++){
						?>

							<tr>
								<td scope="col"><?php echo $resultado[$i]['nome']; ?></td>
								<td scope="col"><?php echo $resultado[$i]['telefone'];?></td>
								<td scope="col"><?php echo $resultado[$i]['origem'];?></td>
								<td scope="col"><?php echo $resultado[$i]['data_contato']; ?></td>
								<td scope="col"><?php echo $resultado[$i]['observacao']; ?></td>
								<td scope="col">
									<button type="button" class="btn btn-outline-primary" onclick="location.href='editarClientes.php?id=<?php echo $resultado[$i]['id']; ?>'" style="width: 72px;">Editar</button>
									<button type="button" class="btn btn-outline-primary" style="width: 72px">Excluir</button>
								</td>
							</tr>
						<?php
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
