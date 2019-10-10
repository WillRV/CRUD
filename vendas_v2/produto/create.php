<?php
    require "../conecta.php";

    $sql = "SELECT * FROM produto";
    $result = mysqli_query($link,$sql) or die('Falha ao Consultar Produtos');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Vendas</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/starter-template.css">
</head>
<body>


<main role="main" class="container">

  <div>
    <h1>Novo Produto</h1>
    <form action="insert.php" method="post">
        <p class="form-group">
            <label for="descricao">Descrição</label>
            <input class="form-control" type="text" name="descricao">
        </p>
        <p class="form-group">
            <label for="valor_unitario">Valor Unitário</label>
            <input  class="form-control" type="text" name="valor_unitario">
        </p>
        <p class="form-group">
            <input type="reset" class="btn btn-default" value="Limpar">
            <input type="submit" class="btn btn-primary" value="Salvar">
        </p>
    </form>
  </div>

</main><!-- /.container -->

</body>
</html>