<?php
require_once "../Doe-e-alimente/includes/funcoes-sessao.php";
require_once "../Doe-e-alimente/includes/funcoes-usuarios.php";

verificaAcesso();

if(isset($_GET["logout"])){
    logout();
}

$contatos = lerContatos($conexao);
?>

<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Feedbacks | Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="../Doe-e-alimente/css/admin.css">
  <link rel="shortcut icon" href="imagens/panelinha.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="container py-4">
            <nav class="d-flex align-items-center justify-content-between navbar-expand-lg bg-body-tertiary p-2">
                <div class="d-flex align-items-center">
                    <a class="navbar-brand" href="doadores.php">Admin | Doe e alimente</a>
                </div>
                <div class="d-flex align-items-center">
                    <a class="navbar-brand" href="doadores.php">Doadores</a>
                </div>
              <div>
                <a class="navbar-brand" href="?logout">Sair<img src="imagens/exit.svg" alt="icone de saída" class="ms-3"></a></div>
            </nav>
        </div>
    </header>

    <main id="main-mensagens">
      <h2 class="text-center my-5 usuarios">Feedbacks <span class="badge cor-caixinha"><?=count($contatos)?></span></h2>
      <section class="container d-flex flex-column justify-content-center">
        <?php foreach ($contatos as $contato) { ?>
        <article class="card-user bg-light p-5 mb-5">
          <div class="centralize mb-5 flex-column-reverse">
            <div class="centralize mt-5">
              <img src="imagens/bonequinho-do-nome.svg" alt="icone de usuário" class="me-5">
              <p class="m-0"><?=$contato['nome']?></p>
            </div>
            <div class="centralize date">
              <p class="m-0 text-muted"><span class="me-4"><?=formataHora($contato['data'])?></span>-<span class="ms-4"><?=formataData($contato['data'])?></span></p>
            </div>
          </div>
          <div class="centralize mb-5">
            <img src="imagens/icone-do-email.svg" alt="icone de usuário" class="me-5">
            <p class="m-0 text-break"><?=$contato['email']?></p>
          </div>
          <div class="centralize mb-5">
            <img src="imagens/icone-do-telefone.svg" alt="icone de usuário" class="me-5">
            <p class="m-0"><?=$contato['telefone']?></p>
          </div>
          <div class="centralize align-items-start mb-5">
            <img src="imagens/icone-da-mensagem.svg" alt="icone de usuário" class="me-5">
            <p class="m-0"><?=$contato['mensagem']?></p>
          </div>
        </article>
        <?php } ?>
      </section>
    </main>
</body>
</html>