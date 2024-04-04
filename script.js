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