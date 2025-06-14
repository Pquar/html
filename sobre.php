<?php $cabecalho_title = "Mirror Fashion | Sobre";
$rodape_css = '<link rel="stylesheet" href="./css/rodape.css">';
$sobre_css = '<link rel="stylesheet" href="./css/main.css">';
include("./php/heada.php"); ?>
</header>
<div class="título ">
    <h1>A Mirror Fashion</h1>
</div>
<div class="text">
    <p>A Mirror Fashion é a maior empresa comércio eletrônico no segmento de moda em todo o mundo. Fundada há
        <?php print date("Y") - 1932; ?> anos, possui filiais em 124 países, sendo líder de mercado com mais de 90% de
        participação em 118 deles.
    </p>
    <p>Nosso centro de distribuição fica em <a href="https://maps.google.com.br/?=Jacarezinho">Jacarezinho, no
            Paraná</a>. De lá, saem 48 aviões que
        distribuem nossos produtos às casas do mundo todo. Nosso centro de distribuição:</p>
</div>
<div class="ocentro">
    <figure>
        <img class="imgcentro" src="mirrorfashion/img/centro-distribuicao.png"
            alt="Foto do centro de distribuição da Mirror Fashion">
        <figcaption>Centro de distribuição da Mirror Fashion</figcaption>
    </figure>
</div>
<iframe class="mapa"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.4499776307007!2d-46.63490682567628!3d-23.588189862576442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5a2b2ed7f3a1%3A0xab35da2f5ca62674!2sAlura%20-%20Escola%20Online%20de%20Tecnologia!5e0!3m2!1spt-BR!2sbr!4v1693052678834!5m2!1spt-BR!2sbr"
    width="425" height="350" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
<div class="textdois">
    <p>Compre suas roupas e acessórios na Mirror Fashion. Acesse <a href="index.php">nossa loja</a> ou entre em contato
        se tiver dúvidas. Conheça também nossa <a href="#historia">história</a> e nossos <a
            href="#diferenciais">diferenciais</a>.</p>
</div>
<div class="historia">
    <h2 id="historia">História</h2>
    <figure class="imgfamilia">
        <img src="mirrorfashion/img/familia-pelho.jpg" alt="Foto da família Pelho">
        <figcaption>Família Pelho</figcaption>
    </figure>
</div>
<div class="histotext">
    <p>A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A
        família Pelho, tradicional da região, investiu todas as suas economias nessa nova iniciativa,
        revolucionária para a época. O fundador Eduardo Simões Pelho, dotado de particular visão
        administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado
        de seu filho E. S. Pelho Filho, atual CEO. O nome da empresa é inspirado no nome da família.
    </p>
    <p>O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países.
        Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões
        de usuários diferentes, em bilhões de diferentes pedidos.
    </p>
    <p>
        O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do
        Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do
        Brasil, há 240 mil funcionários, além dos 890 mil brasileiros nas instalações de Jacarezinho e
        nos escritórios em todo país.
    </p>
    <p>
        Dada a importância econômica da empresa para o Brasil, a família Pelho já recebeu diversos prêmios,
        homenagens e condecorações. Todos os presidentes do Brasil já visitaram as instalações da Mirror
        Fashion, além de presidentes da União Européia, Ásia e o secretário-geral da ONU.
    </p>
</div>
<div class="lista">
    <h2 id="diferenciais">diferenciais</h2>
    <iframe class="video" width="420" height="315" src="https://www.youtube.com/embed/Tb06abHE4hY?si=6EqAncXMeXTUKt1j"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
    <ul>
        <li>Menor preço do varejo, garantido</li>
        <li>Se você achar uma loja mais barata, leba o produto de graça</li>
        <li>Pague em reais, dólares, euros ou bitcoins</li>
        <li>Todas as compras com frete grátis para o mundo todo</li>
        <li>Maior comércio eletrônico de moda do mundo</li>
        <li>Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama</li>
        <li>Presente em 124 países</li>
        <li>Mais de um milhão de funcionários em todo o mundo</li>
    </ul>
</div>
<?php include("./php/rodape.php"); ?>
</div>
</body>

</html>