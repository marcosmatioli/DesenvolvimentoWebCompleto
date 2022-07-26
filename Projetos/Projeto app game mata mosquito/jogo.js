/*pega a largura e altura do monitor, atualizando ela em tempo real,
foi utilizado onresize e a função ajustaTamanhoPalcoTela*/

var altura = 0
var largura = 0

function ajustaTamanhoPalcoJogo() {
    altura = window.innerHeight
    largura = window.innerWidth
    console.log('Altura do monitor: ' + altura + ' Largura do monitor: ' + largura)
}
ajustaTamanhoPalcoJogo()

/** vai ser criado o número random para aparecer o mosquito na tela */

function posicRandomica() {
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
    //concatenando classes tem quer ter um   \/ espaço para eles não ficarem grudados
    mosquito.className = tamanhoAleatorio() +' '+  ladoAleatorio()
    mosquito.style.left = posicaoX + 'px'
    mosquito.style.top = posicaoY + 'px'
    mosquito.style.position = 'absolute'
    document.body.appendChild(mosquito)
    
    
}

function tamanhoAleatorio() {
    var rng = Math.floor(Math.random() * 3)
    console.log('Tamanho do mosquito: ' + rng)
    switch (rng) { // não precisa do break pq o return ja é considerado o ultima coisa da função
        case 0:
            return 'mosquito1'

        case 1:
            return 'mosquito2'

        case 2:
            return 'mosquito3'
    }
}
function ladoAleatorio(){
    var rng1 = Math.floor(Math.random() * 2)
    console.log('Valor do lado do mosquito 0 é LadoA / 1 é LadoB: ' + rng1)
    switch (rng1) { // não precisa do break pq o return ja é considerado o ultima coisa da função
        case 0:
            return 'ladoA'

        case 1:
            return 'ladoB'
    }
}