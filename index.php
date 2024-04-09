<?php
 
    //conexão com o BD
    $connection = mysqli_connect("localhost:3306", "root", "root", "fazorcamento") or die ("Error: " . mysqli_error($connection));

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
                ORDER BY nome; ";

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

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <script type="text/javascript" src="./script.js"></script>
    <link rel="stylesheet" href="./estilo/estilo.css">
</head>
<body>
    <h1>Orçamento!</h1>    

      
        <table class="tabela-processador tabela-geral">
            <thead onclick="mostraTabela('processador')">
                <tr >
                    <th >Nome</th>
                    <th>Valor</th>
                </tr>
            </thead>

            <tbody class="processador tabela-geral" id="tabela-processador">
                <script>atualizaTabela("processador")</script>
            </tbody>
        </table>
        
        <table class="tabela-placa-mae tabela-geral">
            <thead onclick="mostraTabela('placa-mae')">
                <th>Nome</th>
                <th>ChipSet</th>
                <th>Soquete</th>
                <th>Valor</th>
            </thead>

            <tbody class="placa-mae" id="tabela-placa-mae">
                <script>atualizaTabela("placa-mae")</script>
            </tbody>
        </table>



        <table class="tabela-componentes tabela-geral">
            <thead>
                <th>Componente</th>
                <th>Nome</th>
                <th>Valor</th>
            </thead>

            <tbody id="tabela-componentes">
                
            </tbody>
        </table>


</body>
</html>