<?php
    require '../conecta.php';

    $descricao = $_POST['descricao'];
    $valor = $_POST['valor_unitario'];

    $sql = "INSERT INTO produto(descricao,valor_unitario)
            VALUES ('$descricao',$valor)";
    
    mysqli_query($link,$sql) or die("Falha ao inserir Produto");

    header('Location: index.php');