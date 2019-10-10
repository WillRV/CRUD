<?php
    require '../conecta.php';

    $descricao = $_POST['descricao'];
    $valor = $_POST['valor_unitario'];
    $id = $_POST['id_produto'];

    $sql = "UPDATE produto
            SET descricao = '$descricao',
                valor_unitario = $valor
            WHERE id_produto =  $id";
    mysqli_query($link, $sql) or die ("Falha ao editar Produto");

    header('Location: index.php');
?>