const botao = document.querySelector("nav h2");
const linksMenu = document.querySelector(".menu");
const icone = document.querySelector(".icone");

botao.addEventListener("click", function(event){
    event.preventDefault();
    linksMenu.classList.toggle("aberto");

    if(linksMenu.classList.contains("aberto")){
        icone.innerHTML = "&times;";
    } else {
        icone.innerHTML = "&equiv;";
    }
});
