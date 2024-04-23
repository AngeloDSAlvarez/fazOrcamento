function deixaPrimeiraMaiuscula(string){
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function atualizaTabela(componente) {
    //usa o querySelector para pegar a tabela do componente recebido no parametro
    var tabela = document.querySelector("#tbody-" + componente);

    var theadTabela = document.querySelector("#thead-" + componente);
    theadTabela.innerHTML = ``;
    //'pega' o json do componente, recebido atravez do parametro
    fetch("./json/" + componente + ".json").then((resposta) => {
        //converte a resposta em JSON e após for convertido (.then) possuo os componentes, que fica em items
        resposta.json().then((items) => {
            //cria vetor com o nomes para serem inseridos no cabeçalho, através das keys do objeto recebido do json
            //caso não tenha itens inseridos na tabela no DB dara erro de conversão de null para object
            let vetorCabecalho = Object.keys(items[0]);
            //inicializa a linha do th
            var textoTHead = `<tr id=""> `;
            //for pelo vetor para inserir os th na tabela, começando do 1 para ignorar o id
            for (let i = 1; i < vetorCabecalho.length; i++) {
                textoTHead += ` <th> `;
                //utiliza função para deixar primeira letra do cabeçalho maiuscula
                textoTHead += deixaPrimeiraMaiuscula(vetorCabecalho[i]);
                textoTHead += ` </th> `;
            }
            textoTHead += `</tr>`;
            //insere os <th> no thead da tabela
            theadTabela.innerHTML += textoTHead;
            

            //map pelo JSON dos componentes para percorrer por todos
            items.map((item) => {
                //passa os objetos para um array
                const array = Object.keys(item).map(chave => item[chave]);
            
                //cria a string para inserir os itens na tabela do componente
                //onclick na <tr> chama função alteraComponente, enviando o id do item e o nome do componente
                var texto = `<tr id="${componente + array[0]}" onclick="alteraComponente(` + array[0] + `,'` + componente + `')"> `;
                //for pelo array, para inserir na string
                for (let i = 1; i < array.length; i++) {
                    texto += ` <td> `;
                    texto += array[i];
                    texto += ` </td> `;
                }
                texto += ` </tr> `;
                //innerHTML na tabelaProcessadores, para inserir o componente na tabela
                tabela.innerHTML += `${texto}`;
                
            })
        })
    })
}


function teste(){
    
}
function alteraComponente(id_item, componente) {
    //usa o querySelector parra pegar a tbody-componentes
    let tbodyComponentes = document.querySelector("#tbody-componentes");
    //'pega' o json do componente, recebido atravez do parametro
    fetch("./json/" + componente + ".json").then((response) => {
        //converte a resposta em JSON e após for convertido (.then) possuo os componentes, que fica em items
        response.json().then((itens) => {

            //map pelo JSON dos componentes para percorrer por todos
            itens.map((item) => {
                //passa os objetos para um array
                const arrayComponente = Object.keys(item).map(chave => item[chave]);
            
                //verifica se o id_item recebido como parametro é igual ao item.id, do JSON
                if (id_item == item.id) {
                    //pega o elemento <tr> pelo id, id que é o nome do componente, ex: processador, placa-mae
                    let trComponente = document.getElementById(componente);
                    //verifica se o <tr> do componente está nulo, para apagar o elemento e não ficar duplicado
                    if (trComponente != null) {
                        //remove o <tr> caso não esteja nula
                        trComponente.remove();
                        atualizaTotalTabela(tbodyComponentes, item.preco, false);
                    }

                    //innerHTML na "tbodyComponentes" colocando id o nome do componente e outros dados.
                    tbodyComponentes.innerHTML += `
                    <tr id="${componente}">
                        <td > ${componente} </td>
                        <td > ${item.nome} </td>
                        <td > R$ ${item.preco} </td>
                    </tr>
                    `;
                    atualizaTotalTabela(tbodyComponentes, item.preco, true);
                    componenteAtivo(id_item, componente);
                }
            })
        })
    })
}

/*  função para atualizar o valor total da tabela de componentes, recebe como parametro o tbody da tabela, valor e a opção
    tbody da tabela para fazer o innerHtml com a atualização
    recebe diretamente o valor do item para ser somado ou subtraído do total
    opção para saber se é para somar ou subtrair o valor: false = subtrair | true = somar
    ex. de uso: (elemento recebido pelo Document.GetElementBy, 200, True)
    irá somar no elemento recebido o valor de 200
*/
function atualizaTotalTabela (tabela, valor, opcao) {
    var trValorTotal = document.getElementById("valorTotalComponentes");
    valor = parseFloat(valor);

    //verifica se existe já a linha com o valor total
    if (trValorTotal != null) {
        //recebe o valor atual de valor total e faz um parseFloat
        var valorAtual = parseFloat(trValorTotal.lastElementChild.textContent);
        //remove a linha atual
        trValorTotal.remove();
        //verifica se quer somar um subtrair
        if (opcao){
            //adiciona novamente a linha com o valor total com o valor antigo + o recebido no parametro
            tabela.innerHTML += `
                <tr id="valorTotalComponentes">
                    <td>Valor Total</td>
                    <td></td>
                    <td >${valorAtual += valor}</td>
                </tr>
            `;
        } else {
            //adiciona novamente a linha com o valor total com o valor antigo - o recebido no parametro
            tabela.innerHTML += `
                <tr id="valorTotalComponentes">
                    <td>Valor Total</td>
                    <td></td>
                    <td >${valorAtual -= valor}</td>
                </tr>
            `;
        }
    //opção para subtração
    } else {
        if (opcao){
            //insere a linha do valor total pela primeira vez
            tabela.innerHTML += `
                <tr id="valorTotalComponentes">
                    <td>Valor Total</td>
                    <td></td>
                    <td >${valor}</td>
                </tr>
            `;
        }
    }
    
}
//array dos componentes ativos nas tabelas
var componentesAtivos = [0];

//função para deixar o componente da tabela ativo quando seleciona
//componente ativo = cor de fundo destacada
//recebe o id do componente e o nome dele. ex: 1, 'processador'
function componenteAtivo(id, componente) {
    //seleciona o <tr> do componente que deseja ativar
    let trComponenteAtivo = document.querySelector("#" + componente + id );
    //for para percorrer array dos componentes ja ativos
    for (let i = 0; i < componentesAtivos.length; i++) {
        //verifica se o componente e o id recebido nos parametros já está no array dos componentes ativos
        if (componentesAtivos[i][0] == componente && componentesAtivos[i][1] != id) {
            //caso esteja adicionar a class 'item-ativo' para o <tr>
            trComponenteAtivo.classList.add('item-ativo');
            let idItemAntigo = componentesAtivos[i][0] + componentesAtivos[i][1]; //cria variavel para colocar o componente e seu id do componente antigo
            let itemAntigo = document.querySelector("#" + idItemAntigo ); //seleciona o <tr> do item antigo do componente para retirar a classe
            itemAntigo.classList.remove('item-ativo'); //retira a classe 'item-ativo' do <tr> antigo 

            componentesAtivos[i][1] = id; //altera o id do componente para o id atual
            break; //break para o array não quebrar e adicionar infinitamente no final
        } else if (i == componentesAtivos.length - 1){ //verifica se é o ultimo item do array, para não adicionar toda vez que cair no else
            trComponenteAtivo.classList.add('item-ativo'); // adiciona a classe 'item-ativo' para o <tr>
            i++; //adiciona 1 ao i
            componentesAtivos[i] = [componente, id]; //adiciona o componente e o seu id ao array
        }
    }

}

//função para mostrar/sumir o tbody das tabelas
function mostraTabela(componente) {
    let tbody = document.querySelector("#tbody-" + componente); //recebe o tbody atraves do componente

    if (tbody.style.visibility == "collapse") { //verifica se o tbody já está collapsado
        tbody.style.visibility = "visible"; //deixa visivel
    } else {
        tbody.style.visibility = "collapse"; //deixa collapsado
    }
}