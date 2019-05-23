<?php
	require_once 'conexao.php';
?>
<html>

<head>
	<meta charset="utf-8">
	<title>index</title>
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
	<h1 class="display-4">Cadastro de Livro </h1>
		<div class="containner">
			<form action="cadastro-livro.php" class="pimba" method="post">
				<hr>	
				<label>
					<span>Digite Nome:</span>
					<input class="form-control" type="text" name="livro" />
				</label>
				<label>
					<span>Digite Ano do Livro:</span>
					<select class="form-control" name="ano">
						<?php
							for($a=1950; $a<=2019; $a++){
								echo" <option value='$a'> $a </option> ";
							}
						?>
					</select>
				</label>
				<hr>
				<label>
					<span>Digite ISBN:</span>
					<input type="text" name="isbn" class="form-control" />
				</label>
				<label>
					<span>Escolha a opção para Autor</span>
					<select name="autor" class="form-control">
						<?php
								$query="SELECT * FROM autor ORDER BY nome_autor";
								$exe=mysqli_query ($conexao,$query);
								while ($arsetor = mysqli_fetch_array($exe)) {
									echo"<option value='$arsetor[id_autor]'> $arsetor[nome_autor] </option>";
								}
							?>
					</select>
				</label>
				<hr>	
				<label>
					<span>Escolha a opção para Editora</span>
					<select name="editora" class="form-control">

						<?php
								$query="SELECT * FROM editora ORDER BY nome_editora";
								$exe=mysqli_query ($conexao,$query);
								while ($arsetor = mysqli_fetch_array($exe)) {
										echo"<option value='$arsetor[id_editora]'> $arsetor[nome_editora] </option>";
								}
							?>
					</select>
				</label>
				<hr>	
				<label>
					<button class="btn btn-success" type="submit" value="Cadastrar">Cadastrar</button>
				</label>
			</form>
		</div>
</body>

</html>