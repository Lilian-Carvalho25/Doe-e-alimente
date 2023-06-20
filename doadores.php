<?php
require_once "../Doe-e-alimente/includes/funcoes-sessao.php";
require_once "../Doe-e-alimente/includes/funcoes-usuarios.php";

verificaAcesso();

if (isset($_GET["logout"])) {
    logout();
}

$doadores = lerTodosOsDoadores($conexao);
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doadores | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="shortcut icon" href="imagens/panelinha.png" type="image/x-icon">
</head>

<body>
    <header>
        <div class="container py-4">
            <nav class="d-flex align-items-center justify-content-between navbar-expand-lg p-2 px-5">
                <div class="d-flex align-items-center">
                    <a class="navbar-brand" href="mensagens.php">Admin | Doe e alimente</a>
                </div>
                <div>
                    <a class="navbar-brand" href="mensagens.php">Feedbacks</a>
                </div>
                <a class="navbar-brand" href="?logout">Sair<img src="imagens/exit.svg" alt="icone de saída" class="ms-3"></a>
        </div>
        </nav>
        </div>
    </header>

    <main id="main-doadores">
        <h2 class="text-center my-5 doadores">Doadores <span class="badge cor-caixinha"><?= count($doadores) ?></span></h2>
        <section class="container">
            <article class="card-user w-75 m-auto bg-light p-5 mb-5">
                <div class="table-responsive">

                    <table class="table table-hover text-center">
                        <thead class="table-light">
                            <tr>
                                <th>Nome do doador(a)</th>
                                <th>Data da doação</th>
                                <th>Valor doado</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($doadores as $doador) { ?>

                                <tr>
                                    <td> <?= $doador["nome"] ?> </td>
                                    <td> <?= formataData($doador["data"]) ?> </td>
                                    <td>R$ <?= $doador["valor"] ?> </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </article>

        </section>
    </main>

</body>

</html>