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

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <script type="text/javascript" src="./script.js"></script>
    <link href="./bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./estilo/estilo.css">

</head>

<body>

    <script src="./bootstrap-5.3.3-dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <div class="container-pagina">
        <h1>Orçamento!</h1>
        <hr>
        <div class="tabelas-componentes">
            <span class="span-componentes">
                <h3>
                    Processador
                </h3>
                <!-- Button trigger modal  pelo data-bs-toggle e data-bs-target-->
                <svg data-bs-toggle="modal" data-bs-target="#modalAdicionarProcessador" onclick="teste()"
                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0,0,256,256">
                    <g fill="#dce3ed" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                        style="mix-blend-mode: normal">
                        <g transform="scale(5.12,5.12)">
                            <path
                                d="M25,2c-12.6907,0 -23,10.3093 -23,23c0,12.69071 10.3093,23 23,23c12.69071,0 23,-10.30929 23,-23c0,-12.6907 -10.30929,-23 -23,-23zM25,4c11.60982,0 21,9.39018 21,21c0,11.60982 -9.39018,21 -21,21c-11.60982,0 -21,-9.39018 -21,-21c0,-11.60982 9.39018,-21 21,-21zM24,13v11h-11v2h11v11h2v-11h11v-2h-11v-11z">
                            </path>
                        </g>
                    </g>
                </svg>

               

                <!-- Modal -->
                <div class="modal fade" id="modalAdicionarProcessador" tabindex="-1" aria-labelledby="tituloModalProcessador"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="tituloModalProcessador">Adicionar Processador</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    ...
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fim modal -->
                <hr>
                <table class="tabela-processador tabela-geral">

                    <thead id="thead-processador" onclick="mostraTabela('processador')">
                        <tr>
                            <th>Nome</th>
                            <th>Valor</th>
                        </tr>
                    </thead>

                    <tbody class="processador" id="tbody-processador">
                        <script>atualizaTabela("processador")</script>
                    </tbody>
                </table>
            </span>
            <span class="span-componentes">
                <h3>Placa mãe</h3>
                <hr>
                <table class="tabela-placa-mae tabela-geral">
                    <thead id="thead-placa-mae" onclick="mostraTabela('placa-mae')">
                    </thead>

                    <tbody class="placa-mae" id="tbody-placa-mae">
                        <script>atualizaTabela("placa-mae")</script>
                    </tbody>
                </table>
            </span>

        </div>

        <table class="tabela-componentes tabela-geral">
            <thead onclick="mostraTabela('componentes')">
                <th>Componente</th>
                <th>Nome</th>
                <th>Valor</th>
            </thead>

            <tbody id="tbody-componentes">

            </tbody>
        </table>


    </div>
</body>

</html>