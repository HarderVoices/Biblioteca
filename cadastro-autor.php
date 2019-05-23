<?php
	require_once 'conexao.php';
	
	$autor = $_POST["autor"];
	
	$query="INSERT INTO autor (nome_autor) VALUES ('$autor')";
	$insere= mysqli_query ($conexao,$query);
	if($insere==1){
		echo ("<script LANGUAGE='JavaScript'>
		window.alert('Autor cadastrado com sucesso');
		window.location.href='autor.php';
	 	</script>");
	}else{
		echo "Deu ruim";
	}

?>

