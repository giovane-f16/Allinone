<?php get_header(); ?>

<div class="principal">
    <img id="img_principal" src="https://image.freepik.com/vetores-gratis/feliz-ano-novo-2022-numeros-dourados-com-fitas-e-confetes-em-um-fundo-branco-banner-para-cabecalhos-de-ferias-de-natal-e-inverno-folhetos-de-festa_145391-965.jpg">
</div -->

<div class="meio">
    <nav>
        <ul>
            <li><a href="https://docs.awesomeapi.com.br/api-de-moedas">Dólar: <?php echo do_shortcode("[valor_moeda moeda='USD']"); ?> </a></li>
            <li><a href="#">IPCA: <?php Pegar_valor_ipca() ?> </a></li>
            <li><a href="#">Gasolina: </a></li>
            <li><a href="#">Salário Mínimo: </a></li>
            <li><a href="https://docs.awesomeapi.com.br/api-de-moedas">Euro: <?php echo do_shortcode("[valor_moeda moeda='EUR']"); ?> </a></li>
        </ul>
    </nav>
</div -->

<div class="inferior">
    <nav> 
        <ul>
            <li><?php Pegar_post_musica() ?></li>
            <li><?php Pegar_post_esporte() ?></li>
            <li><?php Pegar_post_ofertas() ?></li>
        </ul>
    </nav>
</div>
<?php get_footer(); ?>
