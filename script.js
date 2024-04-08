//adicionar os alimentos do JSON dentro das options
function atualizaSelect(){
    //usa o querySelector para pegar o select dos alimentos
    let selectProcessadores = document.querySelector("#select-processadores");

    //pega o JSON de alimentos e transforma a resposta em "response"
    fetch("./json/processadores.json").then((response) => {
        //converte a resposta em JSON e após for convertido (.then) possuo os "alimentos"
        response.json().then((processadores) =>{
            //map pelo JSON de alimentos para percorrer por todos
            selectProcessadores.innerHTML = ``;
            processadores.map((processador) => {
                //innerHTML no "selectAlimentos" para inserir os alimentos no select
                selectProcessadores.innerHTML += `<option value="${processador.id_processador}"> ${processador.nome}  </option>`;

            })
        })
    })
}

function atualizaTabela() {
    
    //usa o querySelector para pegar o select dos alimentos
    var tabelaProcessadores = document.querySelector("#tabela-processadores");
    
    //pega o JSON de alimentos e transforma a resposta em "response"
    fetch("./json/processadores.json").then((response) => {
        //converte a resposta em JSON e após for convertido (.then) possuo os "alimentos"
        response.json().then((processadores) =>{
            
            //map pelo JSON de alimentos para percorrer por todos
            tabelaProcessadores.innerHTML = ``;
            processadores.map((processador) => {
                //innerHTML na tabelaProcessadores, para inserir o processador na tabela
                //onclick passando o id do processador e o nome do componente para colocar na tabela final dos componentes 
                tabelaProcessadores.innerHTML +=    `
                <tr onclick="alteraProcessador(${processador.id_processador},'${tabelaProcessadores.className}')">
                    <td > ${processador.nome} </td>
                    <td > ${processador.preco} </td>
                </tr>
                `;
            })
        })
    })
}

function alteraInput() {
    let valorProcessador = document.querySelector("#valor-processador");

    let selectProcessadores = document.querySelector("#select-processadores");

    //pega o JSON de alimentos e transforma a resposta em "response"
    fetch("./json/processadores.json").then((response) => {
        //converte a resposta em JSON e após for convertido (.then) possuo os "alimentos"
        response.json().then((processadores) =>{
            //map pelo JSON de alimentos para percorrer por todos
            valorProcessador.innerHTML = ``;
            processadores.map((processador) => {
                processador.id_processador == selectProcessadores.value ? valorProcessador.value = `${processador.valor}` : null;
            })
        })
    })

}


function alteraProcessador(id_processador, componente) {
    let tabelaComponentes = document.querySelector("#tabela-componentes");

    //pega o JSON de alimentos e transforma a resposta em "response"
    fetch("./json/processadores.json").then((response) => {
        //converte a resposta em JSON e após for convertido (.then) possuo os "alimentos"
        response.json().then((processadores) =>{
            
            //map pelo JSON de alimentos para percorrer por todos
            processadores.map((processador) => {
                if (id_processador == processador.id_processador){
                    let trComponente = document.getElementById(componente);
                    if(trComponente != null) {
                        trComponente.remove();
                    }
                    //innerHTML no "selectAlimentos" para inserir os alimentos no select
                    tabelaComponentes.innerHTML +=    `
                    <tr id="${componente}">
                        <td > ${componente} </td>
                        <td > ${processador.nome} </td>
                        <td > R$ ${processador.preco} </td>
                    </tr>
                    `;
                } 
            })
        })
    })
}