<?php
 
    //conexão com o BD
    $connection = mysqli_connect("localhost:3306", "root", "root", "fazorcamento") or die ("Error: " . mysqli_error($connection));

    //query para pegar os alimentos do bd
    $query = "  SELECT * FROM processador
                ORDER BY nome; ";

    //executa a query
    $resultado = mysqli_query($connection, $query) or die ("Erro ao selecionar " . mysqli_error($connection));

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

    //encaminha para a pagina de adicionar a dieta
    //header ('Location: ./adicionar-dieta.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="./script.js"></script>
</head>
<body>
    <h1>Orçamento!</h1>    

    <form>
        <select id="select-processadores" name="processador" onchange="javascript:alteraInput()">
            <script>atualizaSelect()</script>
        </select>

        <input id="valor-processador"  disabled>





        <input type="submit">
    </form>

</body>
</html>