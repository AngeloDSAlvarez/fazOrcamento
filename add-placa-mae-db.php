<?php 
    
    //insere conexão com o banco
    include './conexao-db.php';

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $soquete = $_POST['soquete'];
    $infoAdicional = $_POST['infoAdicional'];

    $query = " INSERT INTO placa_mae VALUES
    (NULL,'$nome', '$soquete', $preco, '$infoAdicional');
    ";

    echo $query;

    $connection->query($query);

    header("Location: ./index.php");
    mysqli_close($connection);
    die();
?>