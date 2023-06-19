<?php 
require_once "includes/conecta.php";
require_once "includes/funcoes-usuarios.php";
require_once "includes/funcoes-sessao.php";

if ( $_SESSION['id'] != 1 ||  $_SESSION['id'] != 2 || $_SESSION['id'] != 3  ) {
    header("location:nao-autorizado.php");
    exit;
}

verificaAcesso();

if(isset($_GET["logout"])){
    logout();
}

$doadores = lerTodosOsDoadores($conexao);
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
    <title>Doe e alimente - doações</title>

</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

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
                    <li><a href="?logout">Sair</a></li>
                </ul>
            </nav>
        </div>
    </header>


<body>
    <div class="row">
        <article class="col-10 m-auto mt-5 bg-white rounded shadow my-1 py-4 doadores">
    
            <h2 class="text-center mb-3">
                Doadores <span class="badge"> <?= count($doadores) ?> </span>
            </h2>
    
            <div class="table-responsive">
    
                <table class="table table-hover text-center">
                    <thead class="table-light">
                        <tr>
                            <th>Nome do doador(a)</th>
                            <th>Data da doação</th>
                        </tr>
                    </thead>
    
                    <tbody>
                    <?php
					foreach ($doadores as $doador) { ?>
    
                            <tr>
                                <td> <?= $doador["nome"] ?> </td>
                                <td> <?= formataData($doador["data"]) ?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
    
        </article>
    </div>
</body>
</html>
