<?php
    require "dados.php";

    if(!isset($_GET["i"])){
        header("location: index.php");
        die;
    }
    $i = $_GET["i"];
    if(isset($viagens[$i])){
        $viagem = $viagens[$i];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Efetuar compra</title>
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
    <div class="conteudo">
    <?php if(isset($viagem)){?>
        <div class="card" style="width:90%;">
            <img src=<?=$viagem["foto"]?> alt="Imagem - <?=$viagem["destino"]?>">
            <h3>Origem: <?=$viagem["origem"]?></h3>
            <h3>Destino: <?=$viagem["destino"]?></h3>
            <h3>Preço: R$
            <?=$viagem["preco"]?>
            <button class="botao-roxo">Comprar</button>
            </h3>
        </div>
        </div>

        <?php 
        }else{
            echo "<h3>Viagem não encontrada</h3>";
        }
        ?>
    </div>
    </div>
</body>
</html>