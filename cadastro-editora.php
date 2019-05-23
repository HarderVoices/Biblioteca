<?php
	require_once 'conexao.php';
	
	$nome_editora = $_POST["editora"];
	
	$query="INSERT INTO editora (nome_editora) VALUES ('$nome_editora')";
	$insere= mysqli_query ($conexao,$query);
	if($insere==1){
		echo ("<script LANGUAGE='JavaScript'>
		window.alert('Editora cadastrada com sucesso');
		window.location.href='editora.php';
	 </script>");
	}else{
		echo "Deu ruim";
	}

?>