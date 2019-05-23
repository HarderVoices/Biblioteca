<?php
    require_once 'conexao.php';
    $sql="SELECT 
    a.nome_autor, 
    b.nome_livro, 
    c.nome_editora

    FROM  


    
  

    ";
    $xx=mysqli_query($conexao,$sql);
    echo "<table border='1'>
            <tr> 
                <td>Nome </td>
                <td>ISBN </td>
                <td>Ano </td>
                <td>Editora </td>
                <td>Autor </td>
            </tr>";

    while($livro = mysqli_fetch_array($xx)){
        echo "<tr>
            <td>$livro[nome_livro]</td>
            <td>$isbn[isbn]</td>
            <td>$ano[ano]</td>
            <td>$editora[nome_editora]</td>
            <td>$autor[nome_autor]</td>
        </tr>";
    }

?>