<?php

    require "dados.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <title>DreamScape</title>
</head>
<body>

    <header>
        <div class=container>
            <div class="menu-logo">
                <h1 class="logo"> <a href="index.html" title="DreamScape"> <img class="logo" src="img/logo.dreamScape.png" alt="Logo Decolar"> </a> </h1>

                <nav class="menu-principal">
                    <ul>
                        <li> <a href="#"> <img src="img/icon-cama.png" alt="icon-cama"> <h3>Hospedagens</h3> </a> </li>
                        <li> <a href="passagens.html"> <img src="img/icon-aviao.png" alt="icon-aviao"> <h3>Passagens</h3> </a> </li>
                        <li> <a href="#"> <img src="img/icon-mala2.png" alt="icon-pacotes"> <h3>Pacotes</h3> </a> </li>
                        <li> <a href="#"> <img src="img/icon-oferta.png" alt="icon-oferta"> <h3>Ofertas</h3> </a> </li>
                        <li> <a href="#"> <img src="img/icon-casa.png" alt="icon-casa"> <h3>Aluguéis</h3> </a> </li>
                        <li> <a href="#"> <img src="img/icon-bilhetes.png" alt="icon-passeios"> <h3>Passeios</h3> </a> </li>
                        <li> <a href="#"> <img src="img/icon-seguros.png" alt="icon-seguros"> <h3>Seguros</h3> </a> </li>
                    </ul>
                </nav>

                <nav class="menu2">
                    <ul>                        
                        <li> <a href="cadastrar.html"> <img src="/img/icon-perfil.png" alt="icon-perfil"> <h3>Iniciar Sessão</h3> </a> </li>
                        <li> <a href="#"> <img src="img/icon-mala.png" alt="icon-mala"> <h3>Minhas Viagens</h3> </a> </li>
                        <li> <a href="#"> <img src="img/icon-ajuda.png" alt="icon-ajuda"> <h3>Ajuda</h3> </a> </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section>
          <h2 id="psgs-aereas">Passagens aéreas disponíveis</h2>
            <div class="conteudo">
                        <?php foreach($viagens as $i => $viagem){ ?>
                <div class="card">
                    <h3 class="titulo-viagem"><?=$viagem["destino"]?></h3>
                    <img src=<?=$viagem["foto"]?> alt="Imagem - <?=$viagem["destino"]?>" class="img-destino">
                    <h4><?=$viagem["ida"]?></h4>
                    <a href="viagem.php?i=<?=$i?>"><button class="botao-roxo">Saiba mais</button></a>
                </div>
                <?php } ?>
            </div>
        </section>

        <section id="topicos">

            <div class="topic-itens">
                <h2>Top destinos mais buscados hoje no Brasil</h2>
                <img src="img/fortaleza.webp" alt="Fortaleza" class="menor">
                <p>Garanta a melhor viagem da sua vida!</p>
                <a href="#" class="botao-roxo">Ver mais</a>
            </div>

            <div class="topic-itens">
                <h2>Ofertas que não podem esperar</h2>
                <img src="img/mulhernotebook.jpg" alt="Mulher no Notebook" width="400px">
                <p>Se você ainda não definiu o seu destino, talvez te <br>  interesse ver a nossa seção de ofertas.</p>
                <a href="#" class="botao-roxo">Ver Ofertas</a>
            </div>
        </section>

        <section class="informacoes">
            <h2>Compre tudo para a sua viagem na DreamScape</h2>
                <div id="coluna">
                    <article class="item">
                        <h3>Como comprar na DreamScape?</h3>
                        <p>Na DreamScape você pode comprar tudo o que precisa para as suas férias. Primeiro, insira a informação da sua viagem no buscador. Compare entre centenas de opções e escolha a que melhor se adapta aos seus planos, clicando em Comprar. Cadastre os dados dos passageiros, selecione o meio de pagamento e insira demais informações necessárias. Aproveite as ofertas e promoções da DreamScape!</p>
                    </article>
                    <article class="item">
                        <h3>Documentação necesssária para comprar e viajar</h3>
                        <p>Para comprar sua viagem na DreamScape, tenha em mãos os números dos documentos de identidade, nomes, sobrenomes e datas de nascimento dos passageiros. Antes de viajar, revise sua reserva em Minha Conta e verifique os vistos e vacinas necessários no país de destino, incluindo escalas e passeios.</p>
                    </article>
                    <article class="item">
                        <h3>É possível alterar ou cancelar uma compra?</h3>
                        <p>Na DreamScape você pode fazer a alteração ou o cancelamento de uma reserva, mas leve em consideração que alguns provedores ou tarifas não permitem ou cobram um custo adicional para isso. Em voos, hotéis e carros, você só pode fazer alterações no mesmo provedor. Você também pode cancelar uma reserva para todos ou para alguns dos passageiros. O que você não pode fazer é alterar o titular da reserva. </p>
                    </article>
                    <article class="item">
                        <h3>Por que devo escolher a DreamScape para a minha viagem?</h3>
                        <p>A DreamScape é uma das agências de viagens online com maior trajetória na América Latina e recomendada por milhares de viajantes. Aproveite as ofertas e promoções no nosso site e conheça o mundo todo. Compre sua viagem na DreamScape através da web ou da app. Viaje com a confiança de que você pode contar conosco para o que precisar.</p>
                    </article>
                </div>

            <div id="atencaoperso">
                <img src="img/icon-atendente.png" alt="icone-atendente" class="icon">
                <h3>Meu Agente DreamScape, compre com atenção personalizada!</h3>
                <p>Temos vários canais de atendimento para você planejar a sua viagem com a ajuda dos nossos agentes.</p>
                <a href="#" class="botao-roxo">Conhecer</a>
            </div>
        </section>

    </main>
    
    <footer id="rodape">
        <h1 class="logo"> <a href="index.html" title="DreamScape"> <img class="logo" src="img/logo.dreamScape.png" alt="Logo Ds"> </a> </h1>

        <p>Todos Direitos Reservados. &copy DreamScape 2023.</p>

        <div class="redes-sociais">
            <a href="" title="Instagram"><img src="img/icon-instagram.png" class="icon"></a>
            <a href="" title="Facebook"><img src="img/icon-facebook.png" class="icon"></a>
            <a href="" title="Whatsapp"><img src="img/icon-whatsapp.png" class="icon"></a>
        </div>

    </footer>

</body>
</html>