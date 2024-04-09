

function atualizaTabela(componente) {
    //usa o querySelector para pegar a tabela do componente recebido no parametro
    var tabela = document.querySelector("#tabela-"+componente);
    
    //'pega' o json do componente, recebido atravez do parametro
    fetch("./json/"+componente+".json").then((resposta) => {
        //converte a resposta em JSON e após for convertido (.then) possuo os componentes, que fica em items
        resposta.json().then((items) =>{
            
            //zera o innerHTML da tabela do componente
            tabela.innerHTML = ``;

            //map pelo JSON dos componentes para percorrer por todos
            items.map((item) => {
                //passa os objetos para um array
                const array = Object.keys(item).map(chave => item[chave]);
                
                //cria a string para inserir os itens na tabela do componente
                //onclick na <tr> chama função alteraComponente, enviando o id do item e o nome do componente
                var texto  = `<tr onclick="alteraComponente(` + array[0] + `,'` + componente+ `')"> `;
                //for pelo array, para inserir na string
                for(let i = 1; i < array.length; i++) { 
                    texto +=` <td> `;
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



function alteraComponente(id_item, componente) {
    //usa o querySelector parra pegar a tabela-componentes
    let tabelaComponentes = document.querySelector("#tabela-componentes");
    //'pega' o json do componente, recebido atravez do parametro
    fetch("./json/"+ componente + ".json").then((response) => {
        //converte a resposta em JSON e após for convertido (.then) possuo os componentes, que fica em items
        response.json().then((itens) =>{
            
            //map pelo JSON dos componentes para percorrer por todos
            itens.map((item) => {
                //verifica se o id_item recebido como parametro é igual ao item.id, do JSON
                if (id_item == item.id){
                    //pega o elemento <tr> pelo id, id que é o nome do componente, ex: processador, placa-mae
                    let trComponente = document.getElementById(componente);
                    //verifica se o <tr> do componente está nulo, para apagar o elemento e não ficar duplicado
                    if(trComponente != null) {
                        //remove o <tr> caso não esteja nula
                        trComponente.remove();
                        }
                    //innerHTML na "tabelaComponentes" colocando id o nome do componente e outros dados.
                    tabelaComponentes.innerHTML +=   `
                    <tr id="${componente}">
                        <td > ${componente} </td>
                        <td > ${item.nome} </td>
                        <td > R$ ${item.preco} </td>
                    </tr>
                    `;
                } 
            })
        })
    })
}

function mostraTabela(componente) {
    let tabela = document.querySelector("#tabela-"+componente);

    console.log(tabela.style.visibility);

    if (tabela.style.visibility == "collapse") {
        tabela.style.visibility = "visible";
    } else {
        tabela.style.visibility = "collapse";
    }

}