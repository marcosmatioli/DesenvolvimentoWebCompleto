/*pega a largura e altura do monitor, atualizando ela em tempo real,
foi utilizado onresize e a função ajustaTamanhoPalcoTela*/

var altura = 0
var largura = 0
var vidas = 1
var tempo = 10
var nivel = window.location.search
var criarMosquitoTempo = 1500
nivel = nivel.replace('?', '')

console.log(nivel.replace('?', ''))
if (nivel === 'normal') {
    //1500 segundos para aparecer o mosquito
    criarMosquitoTempo = 1500
} else if (nivel === 'dificil') {
    //1000 segundos para aparecer o mosquito
    criarMosquitoTempo = 1000
} else if (nivel === 'chucknorris') {
    //750 segundos para aparecer o mosquito
    criarMosquitoTempo = 750
}

function ajustaTamanhoPalcoJogo() {
    altura = window.innerHeight
    largura = window.innerWidth
    /**para depuração no console log */
    console.log('Altura do monitor: ' + altura + ' Largura do monitor: ' + largura)
}
ajustaTamanhoPalcoJogo()

/**cronometro do tempo para tela de vitória */
var cronometro = setInterval(function () {
    /**innerHTML é dentro da tag HMTL */
    tempo -= 1
    if (tempo < 0) {
        clearInterval(cronometro)
        clearInterval(criaMosquito)
        window.location.href = 'vitoria.html'
    } else {
        document.getElementById('cronometro').innerHTML = tempo
    }
}, 1000)

/** vai ser criado o número random para aparecer o mosquito na tela */
function posicRandomica() {
    //remover o mosquito anterior (caso exista)
    if (document.getElementById('mosquito')) {
        //remove o elemento mosquito
        document.getElementById('mosquito').remove()
        if (vidas > 3) {
            //game over
            window.location.href = 'fim_de_jogo.html'
        } else {
            document.getElementById('v' + vidas).src = 'img/coracao_vazio.png'
            vidas++
        }
    }
    var posicaoX = Math.floor(Math.random() * largura) - 90
    var posicaoY = Math.floor(Math.random() * altura) - 90

    /*basicamente se o resultado da conta acima der negativo, está parte do codigo
    vai solucionar este problema*/
    posicaoX = posicaoX < 0 ? 0 : posicaoX
    posicaoY = posicaoY < 0 ? 0 : posicaoY

    console.log('Posição X: ' + posicaoX + ' Posição Y: ' + posicaoY)

    /* criar o elemento no html*/
    /**o que está acontecendo aqui? na primeira linha a gente cria o elemento que no caso
     * é um img ou seja lá no html é img entendeu? um TAG.
     * depois eu falo qual o src ou seja o caminho da imagem
     * depois disso eu aplico as classes eu aplico classes em um elemento daqui do js
     * depois define a posição dele com base nos numeros randomicos que foram criado
     * coloca a posição dele com absolute ou seja é definido por esses dois valores 
     * e vai aparecer por cima de qualquer coisia que estiver na tela
     * //document.insertBefore()
     *  -- var elementoInserido =
     *  elementoPai.insertBefore(novoElemento, elementoDeReferencia);
     */
    var mosquito = document.createElement('img')
    mosquito.src = 'img/mosquito.png'
    //concatenando classes tem quer ter um   \/ espaço para eles não ficarem 
    mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio()
    mosquito.style.left = posicaoX + 'px'
    mosquito.style.top = posicaoY + 'px'
    mosquito.style.position = 'absolute'
    mosquito.id = 'mosquito'
    mosquito.onclick = function () {
        this.remove()
    }
    document.body.appendChild(mosquito)
}

function tamanhoAleatorio() {
    var rngTamanho = Math.floor(Math.random() * 3)
    console.log('Tamanho do mosquito: ' + rngTamanho)
    switch (rngTamanho) { // não precisa do break pq o return ja é considerado o ultima coisa da função
        case 0:
            return 'mosquito1'
        case 1:
            return 'mosquito2'
        case 2:
            return 'mosquito3'
    }
}

function ladoAleatorio() {
    var rngLado = Math.floor(Math.random() * 2)
    console.log('Valor do lado do mosquito 0 é LadoA / 1 é LadoB: ' + rngLado)
    switch (rngLado) { // não precisa do break pq o return ja é considerado o ultima coisa da função
        case 0:
            return 'ladoA'
        case 1:
            return 'ladoB'
    }
}