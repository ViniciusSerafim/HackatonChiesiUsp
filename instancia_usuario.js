var remedios = [];
var remedio1 = {
    nomeRemedio: 'Aerolin',
    medicoPRescricao: 'John Doe',
    dataPrescricao: '01/11/2020',
    disponivelRedePublica: 1,
    estoqueAtual: 2,
    idLembrete: 1234
}
var remedio2 = {
    nomeRemedio: 'Clenil',
    medicoPRescricao: 'John Doe',
    dataPrescricao: '01/11/2020',
    disponivelRedePublica: 0,
    estoqueAtual: 1,
    idLembrete: 5678
}
remedios.push(remedio1, remedio2)

var doencas = [];
var doenca1 = {
    nomeDoenca: 'Asma',
    remedios = []
}
doenca1.remedios = remedios;
doencas.push(doenca1)

var consultas = [];
// aparece no historico
var consulta1 = {
    medicoConsulta: 'John Doe',
    dataConsulta: '01/11/2020',
    enderecoConsulta: 'Rua dos Alecrins 210'
}
// aparece na agenda
var consulta2 = {
    medicoConsulta: 'John Doe',
    dataConsulta: '05/12/2020',
    enderecoConsulta: 'Rua dos Alecrins 210'
}
consultas.push(consulta1, consulta2)

var lembretes = [];
var lembrete1 = {
    tipoLembrete = 'consulta',
    dataLembrete = '04/12/2020',
    repeticao = '',
    idRemedio = -1,
    idConsulta = 1234
}
var lembrete2 = {
    tipoLembrete = 'remedio',
    dataLembrete = '01/11/2020',
    repeticao = 'semanal',
    idRemedio = 1234,
    idConsulta = -1
}
lembretes.push(lembrete1, lembrete2)

var usuario = {
    cpf = '12345678912',
    nomeUsuario = 'Lucimara dos Santos',
    cns = '12345',
    sexo = 'F',
    tipoSanguineo = 'O',
    RH = '+',
    dataNascimento = '17/05/1968',
    email = 'lucimarasantos@mail.com',
    senha = '2547fcf6fe16ffc06ca76bdb326ca491',
    consultas = [],
    doencas = [],
    lembretes = []
}
usuario.doencas = doencas;
usuario.consultas = consultas;
usuario.lembretes = lembretes;
