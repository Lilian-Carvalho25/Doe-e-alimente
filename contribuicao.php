<?php 
require_once "includes/conecta.php";
require_once "includes/funcoes-usuarios.php";


if(isset($_POST['prosseguir'])){

	$nome = $_POST['name'];
	
	inserirDoadores($conexao, $nome);
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
    <title>Doe e alimente - Contribuição</title>
    <script src="https://donorbox.org/widget.js" paypalExpress="false"></script>

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


    <main id="container-contribuicao">
        <section class="espaco-texto">
            <h2>Como contribuir?</h2>
            <p>Nossa cozinha solidária é o resultado do trabalho voluntário e das doações de diversas pessoas que
                acreditam
                na ação coletiva para um mundo melhor! Colabore com esse projeto também.</p>
        </section>

        <section class="espaco-texto">
            <h2>Por que contribuir?</h2>
            <p>A falta de políticas públicas voltadas à Segurança Alimentar e Nutricional fez com que os movimentos
                sociais
                no Brasil tivessem que se organizar para no combate a fome e a carestia que atinge a população.</p>
            <p>Isso não é de hoje. Historicamente, são os movimentos sociais no Brasil que se organizam para combater a
                fome
                do povo quando o governo passa a atender apenas os interesses do andar de cima. Com mais de 670 mil
                mortos
                pela covid, nosso povo ainda tem que enfrentar o desemprego que segue aumentando junto com os preços dos
                alimentos. Sem contar o botijão de gás que passa dos 100 reais na maioria das cidades do país. A fome
                sai
                dos noticiários e passa a orientar a urgência de nossas ações. </p>
            <p>Mais de um ano depois, nossa luta não terminou. O direito à alimentação saudável e nutricional deve ser
                garantido a todas e a todos a nossa Cozinha também é um espaço de acolhimento.</p>
        </section>

        <section class="espaco-texto">
            <h2>Contribuição Mensal</h2>
            <p>Uma contribuição mensal para umavs cozinha solidária é uma forma significativa de ajudar a alimentar
                pessoas
                necessitadas. A cozinha solidária geralmente fornece refeições gratuitas para pessoas em situação de
                vulnerabilidade, como desabrigados, idosos e famílias de baixa renda. </p>
            <p>Contribuir mensalmente com doações financeiras ajuda a garantir que a cozinha possa comprar os
                ingredientes
                necessários para preparar as refeições e manter suas operações funcionando de forma eficaz. </p>
            <p>Uma pequena contribuição mensal pode fazer uma grande diferença na vida das pessoas que dependem dessa
                cozinha solidária para obter sua alimentação básica diária.</p>
        </section>

        <section class="espaco-texto">
            <h2>Contribuição Única</h2>
            <p>Uma contribuição única para uma cozinha solidária é uma doação financeira feita em uma única vez para
                apoiar
                as operações da cozinha e ajudar a alimentar pessoas necessitadas. Essa contribuição pode ser feita em
                qualquer valor e geralmente é usada para comprar ingredientes para preparar as refeições, manter as
                instalações da cozinha em boas condições e garantir que a cozinha possa atender às necessidades
                alimentares
                da comunidade.</p>
        </section>

        <section class="espaco-texto">
            <h2>Contribuição de Empresas</h2>
            <p>As empresas podem contribuir para uma cozinha solidária de várias maneiras, tanto financeiramente quanto
                através de outras formas de apoio.</p>
            <p>Financeiramente, as empresas podem fazer doações regulares ou pontuais para a cozinha solidária, o que
                pode
                ajudar a cobrir os custos de operação da cozinha e permitir que ela atenda a mais pessoas necessitadas.
                As
                empresas também podem organizar eventos de arrecadação de fundos para apoiar a cozinha solidária e
                incentivar seus funcionários a fazerem doações individuais.</p>
        </section>
        <!-- Atenção -->
        <figure class="img-contribuicao"><img src="imagens/img-contribuicao.png" alt="Marmitas com comida"></figure>

        <section class="container-cartao">
        <div class="payment-title">
        <h2>Contribuição</h2>
    </div>

    <div class="container preload">
        <div class="creditcard">
            <div class="front">
                <div id="ccsingle"></div>
                <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                    <g id="Front">
                        <g id="CardBackground">
                            <g id="Page-1_1_">
                                <g id="amex_1_">
                                    <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                            C0,17.9,17.9,0,40,0z" />
                                </g>
                            </g>
                            <path class="darkcolor greydark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                        </g>
                        <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4">0123 4567 8910 1112</text>
                        <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6">Seu nome</text>
                        <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8">Nome</text>
                        <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8">Expiração</text>
                        <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8">Número do cartão</text>
                        <g>
                            <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">01/23</text>
                            <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">VALID.</text>
                            <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">THRU</text>
                            <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9 		" />
                        </g>
                        <g id="cchip">
                            <g>
                                <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                        c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                            </g>
                            <g>
                                <g>
                                    <rect x="82" y="70" class="st12" width="1.5" height="60" />
                                </g>
                                <g>
                                    <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                                </g>
                                <g>
                                    <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                            c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                            C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                            c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                            c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                </g>
                                <g>
                                    <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                                </g>
                                <g>
                                    <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                                </g>
                                <g>
                                    <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                                </g>
                                <g>
                                    <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                                </g>
                            </g>
                        </g>
                    </g>
                    <g id="Back">
                    </g>
                </svg>
            </div>
            <div class="back">
                <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                    <g id="Front">
                        <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                    </g>
                    <g id="Back">
                        <g id="Page-1_2_">
                            <g id="amex_2_">
                                <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                        C0,17.9,17.9,0,40,0z" />
                            </g>
                        </g>
                        <rect y="61.6" class="st2" width="750" height="78" />
                        <g>
                            <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                    C707.1,246.4,704.4,249.1,701.1,249.1z" />
                            <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                            <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                            <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                        </g>
                        <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7">985</text>
                        <g class="st8">
                            <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10">código de segurança</text>
                        </g>
                        <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                        <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                        <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13">Seu nome</text>
                    </g>
                </svg>
            </div>
        </div>
    </div>
    <form action="" method="post">
    <div class="form-container">
        
            <div class="field-container">
                <label for="name" name="name">Nome</label>
                <input id="name" maxlength="20" type="text" autocomplete="off" name="name">
            </div>
            <div class="field-container">
                <label for="cardnumber">Número do cartão</label><span id="generatecard">alatório</span>
                <input id="cardnumber" type="text"  inputmode="numeric">
                <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                </svg>
            </div>
            <div class="field-container">
                <label for="expirationdate">Expiração (mm/yy)</label>
                <input id="expirationdate" type="text" pattern="[0-9]*" inputmode="numeric">
            </div>
            <div class="field-container">
                <label for="securitycode">Código de segurança</label>
                <input id="securitycode" type="text" pattern="[0-9]*" inputmode="numeric">
            </div>
                </div>
                
            </section>
            <article id="container-confirmar">
                <h3>Confirmar dados e determinar a quantia</h3>
                <button id="prosseguir" name="prosseguir"><a href="https://checkout.stripe.com/c/pay/cs_live_a1RAzfb0e7XAFQXgTPsHLVj8WlprEM77D25uyMyoOGUUMj3fRLVJdwwx7n#fidkdWxOYHwnPyd1blppbHNgWjA0S0Y0SlBGTlFta3ViMT1%2FdWJNUmEyZH9xQE5HdDNCMFVzUm5LQEBfN2dRTmRzMlZVblVnMVdTVW40X1ZxY05AdFdsNnZ1SWxhf2N%2FSjdKVXRXSW5kNUdUNTVwUTdDVFRgXycpJ3VpbGtuQH11anZgYUxhJz8nNz1qM3dGYEdjMGJDMENgMWJiJ3gl" target="_blank"><span>Prosseguir</span><i></i></a></button>
            </article>
        </form>

    </main>


    <footer class="rodape">
        <p>Nos acompanhe em nossas redes sociais:</p>
        <img src="imagens/logo-instagram.png" alt="">
        <img src="imagens/logo-facebook.png" alt="">
        <p>2023</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/6.6.1/imask.min.js"></script>
    <script src="js/cartao.js"></script>

    <!-- Importando a Biblioteca jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Importando o plugin jQuery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


    <script src="js/menu.js"></script>
</body>

</html>