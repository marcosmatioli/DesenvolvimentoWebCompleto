class Despesa {
    constructor(ano, mes, dia, tipo, descricao, valor) {
        this.ano = ano
        this.mes = mes
        this.dia = dia
        this.tipo = tipo
        this.descricao = descricao
        this.valor = valor
    }
    validarDados() {
        for (let i in this) {
            if (this[i] == undefined || this[i] == null || this[i] == '')
                return false
        }
        return true
    }
}
class Bd {
    constructor() {
        let id = localStorage.getItem('id')

        if (id === null) {
            localStorage.setItem('id', 0)
        }
    }
    getProximoId() {
        let proximoId = localStorage.getItem('id') // null
        return parseInt(proximoId) + 1
    }
    gravar(d) {

        /**transformar o objeto literal em um objeto json
         * json é basicamente o que fica no meio do sistema inteiro
         * json é uma string com os dados
         * usa o stringfy para virar string
         * e o parse para voltar a ser um objeto literal
         * aqui tem que ter um nome do obj e o objeto em si que vai ser convertido para json
         */
        let id = this.getProximoId()
        localStorage.setItem(id, JSON.stringify(d))
        /** aqui fica o controlador do proximo item \/*/
        localStorage.setItem('id', id)
    }
    recuperarTodosRegistro() {
        //array de despesa
        let despesas = Array()

        let id = localStorage.getItem('id')
        /**recupera todas as despesas cadastradas em localStorage */
        for (let i = 1; i <= id; i++) {
            let despesa = JSON.parse(localStorage.getItem(i))

            //existe a possibilidade de haver indices que foram pulados/removidos
            if (despesa === null) {
                continue /**ele vai para a proxima iteração */
            }
            despesa.id = i
            despesas.push(despesa)
        }
        return despesas
    }
    pesquisar(despesa) {
        let despesasFiltradas = Array()
        despesasFiltradas = this.recuperarTodosRegistro()
        //console.log(despesa)
        //console.log(despesasFiltradas)

        //ano
        /**aqui o despesasFiltradas recebe a array só que agora com o filtro  nele */
        if (despesa.ano != '') {
            console.log('Filtro de ano')
            despesasFiltradas = despesasFiltradas.filter(d => d.ano == despesa.ano)
        }
        //mes
        if (despesa.mes != '') {
            console.log('Filtro de mes')
            despesasFiltradas = despesasFiltradas.filter(d => d.mes == despesa.mes)
        }
        //dia
        if (despesa.dia != '') {
            console.log('Filtro de dia')
            despesasFiltradas = despesasFiltradas.filter(d => d.dia == despesa.dia)
        }
        //descrição
        if (despesa.descricao != '') {
            console.log('Filtro de descricao')
            despesasFiltradas = despesasFiltradas.filter(d => d.descricao == despesa.descricao)
        }
        //valor
        if (despesa.valor != '') {
            console.log('Filtro de valor')
            despesasFiltradas = despesasFiltradas.filter(d => d.valor == despesa.valor)
        }
        //tipo
        if (despesa.tipo != '') {
            console.log('Filtro de tipo')
            despesasFiltradas = despesasFiltradas.filter(d => d.tipo == despesa.tipo)
        }
        console.log(despesasFiltradas)
        return despesasFiltradas
    }
    remover(id){
        localStorage.removeItem(id)
    }

}

let bd = new Bd()

function cadastrarDespesa() {
    let ano = document.getElementById('ano')
    let mes = document.getElementById('mes')
    let dia = document.getElementById('dia')
    let tipo = document.getElementById('tipo')
    let descricao = document.getElementById('descricao')
    let valor = document.getElementById('valor')

    let despesa = new Despesa(
        ano.value,
        mes.value,
        dia.value,
        tipo.value,
        descricao.value,
        valor.value
    )
    if (despesa.validarDados()) {
        console.log('Dados inseridos com sucesso')
        bd.gravar(despesa)
        //dialog de sucesso em jquery #
        $('#modalRegistraDespesa').modal('show')
        document.getElementById('exampleModalLabel').innerHTML = 'Registro inserido com sucesso'
        document.getElementById('modal-text').innerHTML = 'Despesa foi cadastrada com sucesso!'
        document.getElementById('btnModal').innerHTML = 'Voltar'
        document.getElementById('cor-modal-header').className = 'modal-header text-success'
        document.getElementById('btnModal').className = 'btn btn-primary btn-success'
        /**limpar os campos em caso de sucesso para poder
         * fazer uma outra gravação de forma mais rapida
         */
        mes.value = ''
        ano.value = ''
        tipo.value = ''
        dia.value = ''
        valor.value = ''
        descricao.value = ''

        /** jeito que eu fiz o desafio mas que poderia ter sido mais fácil
         * 
         * document.getElementById('mes').value = ''
        document.getElementById('ano').value = ''
        document.getElementById('tipo').value = ''
        document.getElementById('dia').value = ''
        document.getElementById('valor').value = ''
        document.getElementById('descricao').value = ''
        */

    } else {
        //dialog de erro em jquery $
        $('#modalRegistraDespesa').modal('show')
        document.getElementById('exampleModalLabel').innerHTML = 'Erro na inclusão de despesa'
        document.getElementById('modal-text').innerHTML = 'Existem campos obrigatórios que não foram preenchidos'
        document.getElementById('btnModal').innerHTML = 'Voltar e Corrigir'
        document.getElementById('cor-modal-header').className = 'modal-header text-danger'
        document.getElementById('btnModal').className = 'btn btn-primary btn-danger'
        console.log('Dados invalidos')
    }
}

function carregaListaDespesa(despesas = Array(), filtro = false) {

    if (despesas.length == 0 && filtro == false) {
        despesas = bd.recuperarTodosRegistro()
    }
    /**estamos selecionando o elemento tbody da tabela */
    let listaDespesa = document.getElementById('listaDespesa')
    listaDespesa.innerHTML = ''

    despesas.forEach(function (d) {
        console.log(d)
        /**criando as linhas 1 linha */
        let linha = listaDespesa.insertRow()
        /**criando as colunas 4 colunas */
        linha.insertCell(0).innerHTML = `${d.dia}/${d.mes}/${d.ano}`
        linha.insertCell(1).innerHTML = `${d.tipo}`
        /** aqui o tipo era um número ai o cara fez um switch aqui
         * convertendo a string ou não em int ficaria ao critério do dev
         * mas eu achei mais viavel mudar o value no html
         * então o que vier de lá já está certo!
         */
        linha.insertCell(2).innerHTML = `${d.descricao}`
        linha.insertCell(3).innerHTML = `${d.valor}`

        let btn = document.createElement('button')
        btn.className = 'btn btn-danger'
        btn.innerHTML = '<i class="fas fa-times"</i>'
        btn.id = `id_despesas_${d.id}`
        btn.onclick = function(){
            //remover o id_despesas_
            let id = this.id.replace('id_despesas_','')
            console.log(id)
            bd.remover(id)
            window.location.reload()    
        }
        linha.insertCell(4).append(btn)
        
        console.log(d)
    })
    /**criar botão de exclusão */
    
}

function pesquisarDespesa() {
    let ano = document.getElementById('ano').value
    let mes = document.getElementById('mes').value
    let dia = document.getElementById('dia').value
    let tipo = document.getElementById('tipo').value
    let descricao = document.getElementById('descricao').value
    let valor = document.getElementById('valor').value
    let despesa = new Despesa(ano, mes, dia, tipo, descricao, valor)
    let despesas = bd.pesquisar(despesa)
    carregaListaDespesa(despesas,true)
}