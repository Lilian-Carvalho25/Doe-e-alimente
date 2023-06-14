const pagina = document.querySelector("body");
const botaoModoNoturno = document.querySelector("#noturno");

botaoModoNoturno.addEventListener("click", function(){

    pagina.classList.toggle("modo-noturno");
});