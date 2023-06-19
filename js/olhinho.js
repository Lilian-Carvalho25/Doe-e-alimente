let btn = document.querySelector('.lnr-eye');

btn.addEventListener('click', function() {
  let input = document.getElementById('senha');
  let eyes = document.querySelector('.eyes');

  if(input.getAttribute('type') === 'password') {
    input.setAttribute('type', 'text');
    eyes.setAttribute('src', 'imagens/eye.svg');
    console.log("aberto");
  } else {
    input.setAttribute('type', 'password');
    eyes.setAttribute('src', 'imagens/eye-off.svg');
    console.log("fechado");
  }
});