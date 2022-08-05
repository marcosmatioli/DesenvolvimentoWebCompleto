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
        //dialog de sucesso
        console.log('Dados inseridos com sucesso')
        // bd.gravar(despesa)
    } else {
        //dialog de erro
        console.log('Dados invalidos')
    }

}