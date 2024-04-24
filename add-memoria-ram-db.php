<?php

//insere conexão com o banco
include './conexao-db.php';

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$geracao = $_POST['geracao'];
$clock = $_POST['clock'];

$query = "  INSERT INTO memoria_ram VALUES
            (NULL, '$nome', $preco, '$geracao', $clock);
";
$connection->query($query);

header("Location: ./index.php");
mysqli_close($connection);
die();