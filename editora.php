<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Cadastrar Editora</title>
	<link href="css/main.css" type="text/css" rel="stylesheet" media="screen">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
	<div id="nav">
		<ul>
			<li><a href="livro.php">Livro</a></li>
			<li><a href="editora.php">Editora</a></li>
			<li><a href="autor.php">Autor</a></li>
		</ul>
	</div>
		
	<div class="containner">	
		<h1 class="display-4"> Cadastro da Editora</h1>
			<form action="cadastro-editora.php" method="post" id="formulario">
				<label>
					<span class="Editora">Digite nome da Editora:</span>
					<input placeholder="Ex: Saraiva" class="form-control" type="text" name="editora" />
				</label>
				<label>
					<button class="btn btn-success" type="submit" value="Cadastrar" >Cadastrar</button>
				</label>
			</form>
		</div>	

</body>
</html>