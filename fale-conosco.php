<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Doe </title>
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
                </ul>
            </nav>
        </div>
    </header>



    <main>
        <h2 class="duvida">Fale conosco</h2>

        <div class="container-contato">
        <figure>
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
                <a href="mailto:liliancarvalho@gmail.com">liliancarvalho@gmail.com</a>
                <a href="mailto:plinio.t.vasconcellos@gmail.com">plinio.vasconcellos@gmail.com</a>
                <a href="mailto:viniciusdemirandabarbosa@gmail.com">viniciusmiranda@gmail.com</a>
            </div>
        </div>

        <h2 class="duvida">Qual é a sua dúvida?</h2>
        
           <section>
            <section>
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
                            <input type="number" name="telefone" autocomplete="off" class="telefones">
                            <span>Telefone</span>
                        </div>
                       
                         <div class="inputTextarea">
                           <textarea name="mensagem" id="mensagem" cols="30" rows="7" autocomplete="off" placeholder="Digite sua dúvida"></textarea>
                        </div>
                    </div>
                </form>
            </section>
           </section>
    </main>


    <footer class="rodape">
        <p>Nos acompanhe em nossas redes sociais:</p>
        <img src="imagens/logo-instagram.png" alt="">
        <img src="imagens/logo-facebook.png" alt="">
    </footer>



    <script src="js/menu.js"></script>
</body>

</html>