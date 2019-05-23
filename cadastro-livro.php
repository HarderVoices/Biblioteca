<?php
	require_once 'conexao.php';

	$livro = $_POST["livro"];
	$isbn = $_POST["isbn"];
	$ano = $_POST["ano"];
	$editora = $_POST["editora"];
	$autor = $_POST["autor"];
	
	
	$query="INSERT INTO livro (nome_livro, isbn, ano, id_editora, id_autor) VALUES ('$livro', '$isbn', '$ano', '$editora', '$autor')";
	$insere= mysqli_query ($conexao,$query);
	if($insere==1){
		echo ("<script LANGUAGE='JavaScript'>
		window.alert('Livro cadastradado com sucesso');
		window.location.href='livro.php';
	 </script>");

	}else{
		echo "Deu ruim";
	}
	
?>