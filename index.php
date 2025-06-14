<?php

 $cabecalho_title = "Mirror Fashion | Home";
$clear_css = '<link rel="stylesheet" href="./css/clear.css">';
$cabecalho_css = '<link rel="stylesheet" href="./css/cabecalho.css">';
$rodape_css = '<link rel="stylesheet" href="./css/rodape.css">';
$index_css = '<link rel="stylesheet" href="./css/estilo.css">';
include("./php/head.php");
include("./php/cabecalho.php") ?>

<!--Barra de Busca-->
<div class="centro destaque">
    <section class="busca">
        <h2>Busca</h2>
        <form action="">
            <input type="search">
            <button>Buscar</button>
        </form>
    </section>

    <section class="menu-dois">
        <h2>Departamentos</h2>
        <nav>
            <ul>
                <li><a href="">Blusas e Camisas</a>
                    <ul>
                        <li><a href="">Manga curta</a></li>
                        <li><a href="">Manga comprida</a></li>
                        <li><a href="">Camisa social</a></li>
                        <li><a href="">Camisa casual</a></li>
                    </ul>
                </li>
                <li><a href="">Calças</a></li>
                <li><a href="">Saias</a></li>
                <li><a href="">Vestidos</a></li>
                <li><a href="">Sapatos</a></li>
                <li><a href="">Bolsas</a></li>
                <li><a href="">Acessórios</a></li>
            </ul>
        </nav>
    </section>
    <section class="banner">
        <figure>
            <img class="banner-destaque" src="mirrorfashion/img/destaque-home.png" alt="Promoção: Big City Night">
        </figure>
        <a href="" class="pause"></a>
    </section>
</div>
<div class="centro paineis">
    <section class="painel novidade">
        <h2>Novidades</h2>
        <ol>
            <?php
            $conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
            $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data LIMIT 0, 12");
            
            while ($produto = mysqli_fetch_array($dados)):
            ?>

<li>
    <a href="produto.php?id=<?= $produto['id']?>">
        <figure>
            <img src="mirrorfashion/img/produtos/miniatura<?= $produto['id'] ?>.png" alt="<? $produto['nome'] ?>">
            <figcaption><?= $produto['nome']?> por <?= $produto['preco']?></figcaption>
        </figure>
    </a>
</li>
<?php endwhile; ?>
            
        </ol>
        <button type="button">Mostrar mais</button>
    </section>
    <section class="painel mais-vendido">
        <h2>Mais Vendidos</h2>
        <ol>
            <!--Está mostrando os produtos do menor pro maior-->
        <?php
            $conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
            $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0, 12 ");
            
            
            while ($produto = mysqli_fetch_array($dados)):
            ?>
            <li>
                <a href="produto.php?id=<?= $produto['id']?>">
                    <figure>
                        <img src="mirrorfashion/img/produtos/miniatura<?= $produto['id'] ?>.png" alt="<? $produto['nome'] ?>">
                        <figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
                    </figure>
                </a>
            </li>
                <?php endwhile; ?>
        </ol>
        <button type="button">Mostrar mais</button>
    </section>
</div>
<?php include("./php/rodape.php"); ?>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/banner.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</body>

</html>