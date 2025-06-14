<?php
$conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
$produto = mysqli_fetch_array($dados);


$cabecalho_title = "Mirror Fashion | Produtos";
$clear_css = '<link rel="stylesheet" href="./css/clear.css">';
$cabecalho_css = '<link rel="stylesheet" href="./css/cabecalho.css">';
$rodape_css = '<link rel="stylesheet" href="./css/rodape.css">';
$produto_css = '<link rel="stylesheet" href="./css/produto.css">';
include("./php/head.php");
include("./php/cabecalho.php") ?>


<div class="centro produto-back">
    <div class="produto">
        <h1><?= $produto['nome'] ?></h1>
            <p>por apenas <?= $produto['preco'] ?></p>

        <form action="checkout.php" method="post">
            <fieldset class="cores">
                <legend>Escolha a cor:</legend>

                <input type="radio" name="cor" value="Verde" id="verde" checked>
                <label for="verde">
                    <img src="./mirrorfashion/img/produtos/foto<?= $produto['id'] ?>-verde.png" alt="Verde">
                </label>

                <input type="radio" name="cor" value="Rosa" id="rosa">
                <label for="rosa">
                    <img src="./mirrorfashion/img/produtos/foto<?= $produto['id'] ?>-rosa.png" alt="rosa">
                </label>

                <input type="radio" name="cor" value="Azul" id="azul">
                <label for="azul">
                    <img src="mirrorfashion/img/produtos/foto<?= $produto['id'] ?>-azul.png" alt="Azul">
                </label>
            </fieldset>
            <fieldset class="tamanho">
                <legend>Escolha o tamanho:</legend>
                <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                <output for="tamanho" name="valortamanho" class="tamanho">42</output>
            </fieldset>
                <button class="comprar">Comprar</button>
            <a href="index.php">
                <button type="button" class="cancelar">Cancelar</button>
            </a>

            <input type="hidden" name="nome" value="<?= $produto['nome'] ?>">
            <input type="hidden" name="preco" value="<?= $produto['preco'] ?>">
            <input type="hidden" name="<?= $produto['nome'] ?>">
        </form>
    </div>
    <div class="detalhes">
        <h2>Detalhes do produto</h2>
        <p>
            <?= $produto['descricao'] ?>
        </p>
        <table>
            <thead>
                <tr>
                    <th>Característica</th>
                    <th>Detalhe</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Modelo</td>
                    <td>Cardigã 7845</td>
                </tr>
                <tr>
                    <td>Material</td>
                    <td>Algodão e poliester</td>
                </tr>
                <tr>
                    <td>Cores</td>
                    <td>Azul, Rosa e Verde</td>
                </tr>
                <tr>
                    <td>Lavagem</td>
                    <td>Lavar a mão</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include("./php/rodape.php"); ?>
</div>
<script type="text/javascript" src="./js/produto.js"></script>
</body>

</html>