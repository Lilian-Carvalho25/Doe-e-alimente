<?php 
require_once "includes/conecta.php";
require_once "includes/funcoes-usuarios.php";
require_once "includes/funcoes-sessao.php";

if(isset($_GET["campos_obrigatorios"]) ){

	$mensagem = "Você deve preencher e-mail e senha!";
} elseif(isset($_GET["dados_incorretos"])){
	$mensagem = "Dados incorretos, verifique e-mail e/ou senha!";
} elseif(isset($_GET["logout"])){
	$mensagem = "Voce saiu do sistema.";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/panelinha.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Doe e alimente</title>

</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<body>


    <header>
        
        <div class="limitador">
            <a href="index.ph"><img src="imagens/Logo.png" alt=""></a>
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

    <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

        <main class="main-login">
           
                <div class="bg-white rounded shadow col-6 py-5 caixa-login">
                <h2 class="text-center fw-light">Área administrativa</h2>
            
                    <form action="" method="post" id="form-login" name="form-login" class="mx-auto w-75" autocomplete="off">
            
                        <?php if(isset($mensagem)) {?>
                            <p class="my-2 alert alert-warning text-center">
                                <?=$mensagem?>
                            </p>
                            <?php } ?>
            
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail:</label>
                                <input class="form-control" type="email" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha:</label>
                                <div>
                                    <input class="form-control" type="password" id="senha" name="senha">
                                    <span class="lnr lnr-eye"> <img src="imagens/eye-off.svg" alt="" class="eyes"> </span>
                                </div>
                            </div>
            
                            <button class="btn btn-lg" name="entrar" type="submit">Entrar</button>
            
                        </form>
            
            <?php
            
            if(isset($_POST["entrar"])){
            
                if(empty($_POST["email"]) || empty($_POST["senha"])){
                    header("location:login.php?campos_obrigatorios");
                    exit;
            
                } // fim if validação
            
                $email = $_POST['email'];
                $senha = $_POST['senha'];
            
                $dadosUsuario = buscaAdministradores($conexao, $email);
            
                if( $dadosUsuario != null && password_verify($senha, $dadosUsuario['senha'])) {
            
                    login($dadosUsuario['id'], $dadosUsuario['email']);
                    header("location:doadores.php");
                    exit;
            
                } else {
                    header("location:login.php?dados_incorretos");
                    exit;
                }
            } // fim if entrar
            
            ?>
            
                
            
            </div>
        </main>

        <script src="js/olhinho.js"></script>
        <script src="js/menu.js"></script>
</html>

