const caixaDoacao = document.querySelector("#container-selecao form");
const campoValor = caixaDoacao.querySelector("#valor-inserido");
const formulario = document.querySelector("#container-formulario form");
const campoNome = formulario.querySelector("#nome");
const campoEmail = formulario.querySelector("#email");
const campoTelefone = formulario.querySelector("#telefone");
const campoCelular = formulario.querySelector("#celular");

$(campoTelefone).mask("(00) 0000-0000");
$(campoCelular).mask("(00) 0000-00000");