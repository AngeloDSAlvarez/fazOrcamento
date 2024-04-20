<?php 
    
    //insere conexão com o banco
    include './conexao-db.php';

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $nucleos = $_POST['nucleos'];
    $threads = $_POST['threads'];
    $clockMax = $_POST['clockMax'];
    $clockMin = $_POST['clockMin'];
    $memCache = $_POST['memCache'];
    $benchmark = $_POST['benchmark'];
    $soquete = $_POST['soquete'];
    $memRam = $_POST['memRam'];
    $velocRam = $_POST['velocRam'];
    $tdp = $_POST['tdp'];
    $dataLanc = $_POST['dataLanc'];
    $video = $_POST['video'];   

    $query = " INSERT INTO processador VALUES
    (NULL,'$nome', $preco, $nucleos, $threads, $clockMax, $clockMin, $memCache, '$dataLanc', $benchmark, '$soquete', '$memRam', $velocRam, $tdp, $video);
    ";

    echo $query;

    $resultado = $connection->query($query);

    header("Location: ./index.php");
    mysqli_close($connection);
    die();
?>