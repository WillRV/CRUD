<?php
    require '../conecta.php';

    $sql = "UPDATE produto
            SET status = 0
            WHERE id_produto = " . $_GET['id'];
    mysqli_query($link, $sql) or die ("Falha ao desativar Produto");

    header('Location: index.php');
?>