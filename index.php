<?php
 
    //conexão com o BD
    $connection = mysqli_connect("localhost:3306", "root", "root", "fazorcamento") or die ("Error: " . mysqli_error($connection));

    //query para pegar os alimentos do bd
    $queryProcessador = "  SELECT * FROM processador
                ORDER BY nome; ";

    //executa a query
    $resultado = mysqli_query($connection, $queryProcessador) or die ("Erro ao selecionar " . mysqli_error($connection));

    //array para armazenar o resultado
    $arrayProcessador = array();
    
    //passa o resultado para o array
    while($row = mysqli_fetch_assoc($resultado)){
        $arrayAlimentos[] = $row;
    }

    //caminho do JSON
    $jsonAlimentos = fopen('./json/processadores.json', 'w');

    //escreve no JSON e utiliza a função JSON_encode
    fwrite($jsonAlimentos, json_encode($arrayAlimentos));
    fclose($jsonAlimentos);



    //query para pegar os alimentos do bd
    $queryPlacaMae = "  SELECT * FROM placa_mae
                ORDER BY nome; ";

    //executa a query
    $resultado = mysqli_query($connection, $queryPlacaMae) or die ("Erro ao selecionar " . mysqli_error($connection));

    //array para armazenar o resultado
    $arrayProcessador = array();
    
    //passa o resultado para o array
    while($row = mysqli_fetch_assoc($resultado)){
        $arrayAlimentos[] = $row;
    }

    //caminho do JSON
    $jsonAlimentos = fopen('./json/placa-mae.json', 'w');

    //escreve no JSON e utiliza a função JSON_encode
    fwrite($jsonAlimentos, json_encode($arrayAlimentos));
    fclose($jsonAlimentos);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <script type="text/javascript" src="./script.js"></script>
</head>
<body>
    <h1>Orçamento!</h1>    

    <form>
        <select id="select-processadores" name="processador" onchange="javascript:alteraInput()">
            <script>atualizaSelect()</script>
        </select>

        

        <input id="valor-processador"  disabled>
        
        <table>
            <thead>
                <th>Nome</th>
                <th>Valor</th>
            </thead>

            <tbody class="Processador" id="tabela-processadores">
                <script>atualizaTabela()</script>
            </tbody>
        </table>
        
        <table>
            <thead>
                <th>Nome</th>
                <th>ChipSet</th>
                <th>Soquete</th>
                <th>Valor</th>
            </thead>

            <tbody class="Placa-mae" id="tabela-processadores">
                <script>atualizaTabela()</script>
            </tbody>
        </table>



        <table >
            <thead>
                <th>Componente</th>
                <th>Nome</th>
                <th>Valor</th>
            </thead>

            <tbody id="tabela-componentes">
                
            </tbody>
        </table>



        <input type="submit">
    </form>

</body>
</html>