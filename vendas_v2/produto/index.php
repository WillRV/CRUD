<?php
    require "../conecta.php";

    $sql = "SELECT * FROM produto WHERE status = 1 ";
    $result = mysqli_query($link,$sql) or die('Falha ao Consultar Produtos');
    $produto = mysqli_fetch_array($result);
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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>


<main role="main" class="container">

  <div>
    <h1>Produtos Cadastrados</h1>
    <p>
        <a href="create.php">Criar novo</a>
    </p>
    <table class="table table-hover">
        <tr>
            <th>Descrição</th>
            <th>Valor Unitário</th>
            <th>Status</th>
        </tr>
        <?php while($linha = mysqli_fetch_array($result)) : ?>
            <tr>
                <td><?= $linha['descricao'] ?></td>
                <td><?= $linha['valor_unitario'] ?></td>
                <td><?= $linha['status'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $linha['id_produto'] ?>">
                    <button class="btn"><i class="fa fa-pencil"></i></button>
                    </a>
                    <a href="delete.php?id=<?= $linha['id_produto'] ?>">
                    <button class="btn-danger"><i class="fa fa-trash-o"></i></button>
                    </a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
  </div>

</main><!-- /.container -->

</body>
</html>