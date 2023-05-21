const caixaDoacao = document.querySelector("#container-selecao form");
const campoValor = caixaDoacao.querySelector("#valor-inserido");
const formulario = document.querySelector(".container-formularios form");
const campoNome = formulario.querySelector(".nomes");
const campoEmail = formulario.querySelector(".emails");
const campoTelefone = formulario.querySelector(".telefones");
const campoCelular = formulario.querySelector(".celulares");

$(campoTelefone).mask("(00) 0000-0000");
$(campoCelular).mask("(00) 0000-00000");