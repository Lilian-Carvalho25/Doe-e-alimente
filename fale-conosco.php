<?php 
require_once "includes/conecta.php";
require_once "includes/funcoes-usuarios.php";


if(isset($_POST['enviar'])){

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$mensagem = $_POST['mensagem'];
	
	inserirContato($conexao, $nome, $email, $telefone, $mensagem);

	header("location:fale-conosco.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/panelinha.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Doe e alimente - Fale conosco</title>
</head>

<body>

    <header>
       
        <div class="limitador">
            <a href="index.php"><img src="imagens/Logo.png" alt=""></a>
            <nav>
                <h2><a href="" class="icone"> &equiv; </a></h2>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="oq-fazemos.php">O que fazemos</a></li>
                    <li><a href="contribuicao.php">Contribuição</a></li>
                    <li><a href="fale-conosco.php">Fale conosco</a></li>
                    <li><a href="login.php">Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>



    <main class="contato-main">
        <h2 class="duvida">Fale conosco</h2>

        <div class="container-contato">
        <figure class="contato-figura">
            <img src="imagens/ft-lilian.png" alt="Lilian">
            <img src="imagens/ft-plinio.png" alt="Plínio">
            <img src="imagens/ft-salatiel.png" alt="Salatiel">
        </figure>
        <div class="nome">
            <p><strong>Lilian</strong></p>
            <p><strong>Plínio</strong></p>
            <p><strong>Vinícius</strong></p>
        </div>



            <div class="email">
                <a href="mailto:kleidk74@gmail.com"><img src="imagens/gmail-icone.png" alt="ícone gmail"></a>
                <a href="mailto:plinio.t.vasconcellos@gmail.com"><img src="imagens/gmail-icone.png" alt="ícone gmail"></a>
                <a href="mailto:viniciusdemirandabarbosa@gmail.com"><img src="imagens/gmail-icone.png" alt="ícone gmail"></a>
            </div>
        </div>

        <h2 class="duvida">Qual é a sua dúvida?</h2>
        
           <section>
            <section id="container-confirmar">
                <form action="" method="post">
                    <div class="container-formularios">
                        <div class="inputBox">
                            <input type="text" name="nome" autocomplete="off" class="nomes" required>
                            <span>Nome completo</span>
                        </div>
                        <div class="inputBox">
                            <input type="email" name="email" autocomplete="off" class="emails" required>
                            <span>E-mail</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="telefone"  placeholder="Digite aqui" autocomplete="off" class="telefones">
                            <span>Telefone</span>
                        </div>
                       
                         <div class="inputTextarea">
                           <textarea name="mensagem" id="mensagem" cols="30" rows="7" autocomplete="off" placeholder="Digite sua dúvida"></textarea>
                        </div>

                        <button id="enviar" name="enviar"><span>ENVIAR</span><i></i></button>

                    </div>
                </form>
            </section>
           </section>
    </main>


    <footer class="rodape">
        <p>Nos acompanhe em nossas redes sociais:</p>
        <a href="https://www.instagram.com/" target="_blank"><img src="imagens/logo-insta.png" alt="Logo Instagram"></a>
        <a href="https://github.com/Lilian-Carvalho25/Doe-e-alimente" target="_blank"><img src="imagens/logo-github.png" alt="Logo Github"></a>
    </footer>



    <script src="js/menu.js"></script>
</body>

</html>