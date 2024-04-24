<?php
    //insere conexão com o banco
    include './conexao-db.php';

    //query para pegar os processadores do bd
    $queryProcessador = "  SELECT * FROM processador
                ORDER BY nome; ";

    //executa a query
    $resultado = mysqli_query($connection, $queryProcessador) or die ("Erro ao selecionar " . mysqli_error($connection));

    //array para armazenar o resultado
    $arrayProcessador = array();
    
    //passa o resultado para o array
    while($row = mysqli_fetch_assoc($resultado)){
        $arrayProcessador[] = $row;
    }

    //caminho do JSON
    $jsonProcessador = fopen('./json/processador.json', 'w');

    //escreve no JSON e utiliza a função JSON_encode
    fwrite($jsonProcessador, json_encode($arrayProcessador));
    fclose($jsonProcessador);



    //query para pegar a placa mãe do bd
    $queryPlacaMae = "  SELECT * FROM placa_mae
                ORDER BY soquete; ";

    //executa a query
    $resultado = mysqli_query($connection, $queryPlacaMae) or die ("Erro ao selecionar " . mysqli_error($connection));

    //array para armazenar o resultado
    $arrayPlacaMae = array();
    
    //passa o resultado para o array
    while($row = mysqli_fetch_assoc($resultado)){
        $arrayPlacaMae[] = $row;
    }
    //caminho do JSON
    $jsonPlacaMae = fopen('./json/placa-mae.json', 'w');

    //escreve no JSON e utiliza a função JSON_encode
    fwrite($jsonPlacaMae, json_encode($arrayPlacaMae));
    fclose($jsonPlacaMae);


    //query para pegar as memorias ram do bd
    $queryPlacaMae = "  SELECT * FROM memoria_ram
                ORDER BY geracao; ";

    //executa a query
    $resultado = mysqli_query($connection, $queryPlacaMae) or die ("Erro ao selecionar " . mysqli_error($connection));

    //array para armazenar o resultado
    $arrayMemRam = array();
    
    //passa o resultado para o array
    while($row = mysqli_fetch_assoc($resultado)){
        $arrayMemRam[] = $row;
    }

    //caminho do JSON
    $jsonMemoriaRam = fopen('./json/memoria-ram.json', 'w');

    //escreve no JSON e utiliza a função JSON_encode
    fwrite($jsonMemoriaRam, json_encode($arrayMemRam));
    fclose($jsonMemoriaRam);