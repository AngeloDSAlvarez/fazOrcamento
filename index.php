<?php
 
    
    //insere conexão com o banco
    include './info-db.php';

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
            <!-- PROCESSADOR -->
            <span class="span-componentes">
                <h3>
                    Processador
                </h3>
                <!-- Button trigger modal  pelo data-bs-toggle e data-bs-target-->
                <svg data-bs-toggle="modal" data-bs-target="#modalAdicionarProcessador" 
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
            <!-- PLACA MÃE -->
            <span class="span-componentes">
                <h3>Placa mãe</h3>
                <!-- Button trigger modal  pelo data-bs-toggle e data-bs-target-->
                <svg data-bs-toggle="modal" data-bs-target="#modalAdicionarPlacaMae" 
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

                <hr>
                <table class="tabela-placa-mae tabela-geral">
                    <thead id="thead-placa-mae" onclick="mostraTabela('placa-mae')">
                    </thead>

                    <tbody class="placa-mae" id="tbody-placa-mae">
                        <script>atualizaTabela("placa-mae")</script>
                    </tbody>
                </table>
            </span>
<br>
            <!-- MEMÓRIA RAM -->
            <span class="span-componentes">
                <h3>Memória Ram</h3>
                <!-- Button trigger modal  pelo data-bs-toggle e data-bs-target-->
                <svg data-bs-toggle="modal" data-bs-target="#modalAdicionarMemoriaRam"
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

                <hr>
                <table class="tabela-memoria-ram tabela-geral">
                    <thead id="thead-memoria-ram" onclick="mostraTabela('memoria-ram')">
                    </thead>

                    <tbody class="memoria-ram" id="tbody-memoria-ram">
                        <script>atualizaTabela("memoria-ram")</script>
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







        <!-- ÁREA DE MODAIS -->
        <!-- Modal processador -->
        <div class="modal fade" id="modalAdicionarProcessador" tabindex="-1" aria-labelledby="tituloModalProcessador"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="tituloModalProcessador">Adicionar Processador</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="form-processador" action="./add-proce-db.php" method="post" >
                            <div class="form-geral">
                                <label for="nome">Nome
                                    <input type="text" name="nome">
                                </label>

                                <label for="precoProcessador">Preço
                                    <input type="number" name="preco" id="precoProcessador" placeholder="2000.00">
                                </label>


                                <label>Nucleos
                                    <input type="number" name="nucleos">
                                </label>

                                <label>Threads
                                    <input type="number" name="threads">
                                </label>

                                <label>Clock Máximo
                                    <input step="0.010" type="number" name="clockMax">
                                </label>

                                <label>Clock Mínimo
                                    <input step="0.010" type="number" name="clockMin">
                                </label>

                                <label>Memória Cache
                                    <input type="number" name="memCache">
                                </label>

                                <label>Benchmark
                                    <input step="0.010" type="number" name="benchmark">
                                </label>

                                <label>Soquete
                                    <select name="soquete">
                                        <option value="AM3">AM3</option>
                                        <option value="AM4">AM4</option>
                                        <option value="LGA1155">LGA1155</option>
                                        <option value="LGA1151">LGA1151</option>
                                        <option value="LGA1150">LGA1150</option>
                                        <option value="LGA1200">LGA1200</option>
                                        <option value="LGA1700">LGA1700</option>
                                    </select>
                                </label>

                                <label>Memória Ram
                                    <select name="memRam">
                                        <option value="ddr2">DDR2</option>
                                        <option value="ddr3">DDR3</option>
                                        <option value="ddr4">DDR4</option>
                                        <option value="ddr5">DDR5</option>
                                    </select>
                                </label>

                                <label>Velocidade Ram
                                    <input step="0.010" type="number" name="velocRam">
                                </label>

                                <label>TDP
                                    <input step="0.010" type="number" name="tdp">
                                </label>

                                <label>Data Lançamento
                                    <input type="date" name="dataLanc">
                                </label>

                                <div class="container-radio-video">
                                    <label>Possui video integrado</label>
                                        <br>
                                    <label class="clear" for="possuiVideo">Sim
                                        <input type="radio" id="possuiVideo" name="video" value="1">
                                    </label>

                                    <label for="naoPossuiVideo">Não
                                        <input type="radio" id="naoPossuiVideo" name="video" value="0">
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer" style="margin-top: 15px;">
                                <input type="submit" class="btn btn-primary" value="Adicionar Processador">
                            </div>
                            
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- fim modal -->

        <!-- Modal placa mae -->
        <div class="modal fade" id="modalAdicionarPlacaMae" tabindex="-1" aria-labelledby="tituloModalPlacaMae"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="tituloModalProcessador">Adicionar Placa Mãe</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"><!-- corpo e fomulário -->
                        <form id="form-processador" action="./add-placa-mae-db.php" method="post">
                            <div class="form-geral">
                                <label>Nome
                                    <input type="text" name="nome">
                                </label>

                                <label>Preço
                                    <input step="0.010" type="number" name="preco" placeholder="2000.00">
                                </label>


                                <label>Soquete
                                    <select name="soquete">
                                        <option value="AM3">AM3</option>
                                        <option value="AM4">AM4</option>
                                        <option value="LGA1155">LGA1155</option>
                                        <option value="LGA1151">LGA1151</option>
                                        <option value="LGA1150">LGA1150</option>
                                        <option value="LGA1200">LGA1200</option>
                                        <option value="LGA1700">LGA1700</option>
                                    </select>
                                </label>
                            </div>

                            <label class="label-text">Info adicional
                                <textarea class="infoAdicional" name="infoAdicional" maxlength="255"
                                    rows="5"></textarea>
                            </label>

                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value="Adicionar Placa Mãe">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal memoria ram -->
        <div class="modal fade" id="modalAdicionarMemoriaRam" tabindex="-1" aria-labelledby="tituloModalMemoriaRam"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="tituloModalProcessador">Adicionar Memória Ram  </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"><!-- corpo e fomulário -->
                        <form id="form-memoria-ram" action="./add-memoria-ram-db.php" method="post">
                            <div class="form-geral">
                                <label>Nome
                                    <input type="text" name="nome">
                                </label>

                                <label>Preço
                                    <input step="0.010" type="number" name="preco" placeholder="80.00">
                                </label>


                                <label>Geração
                                    <select name="geracao">
                                        <option value="ddr2">DDR2</option>
                                        <option value="ddr3">DDR3</option>
                                        <option value="ddr4">DDR4</option>
                                        <option value="ddr5">DDR5</option>
                                    </select>
                                </label>

                                <label>Clock
                                    <input step="0.010" type="numer" name="clock" placeholder="2666">
                                </label>
                            </div>

                            

                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value="Adicionar Memoria Ram">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- fim modal -->

    </div>
</body>

</html>