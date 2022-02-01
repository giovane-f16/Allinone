<?php get_header(); ?>

<div class="principal">
    <img src="https://image.freepik.com/vetores-gratis/feliz-ano-novo-2022-numeros-dourados-com-fitas-e-confetes-em-um-fundo-branco-banner-para-cabecalhos-de-ferias-de-natal-e-inverno-folhetos-de-festa_145391-965.jpg">
</div>

<div class="meio">
    <nav>
        <ul>
            <li><a href="http://www.dbins.com.br/dica/cotacao-do-dolar-com-php">Dólar: <?php Pegar_valor_dolar() ?> </a></li>
            <li><a href="#">IPCA: <?php Pegar_valor_ipca() ?> </a></li>
            <li><a href="#">Gasolina: </a></li>
            <li><a href="#">Salário Mínimo: </a></li>
            <li><a href="#">Euro: <?php Pegar_valor_euro() ?> </a></li>
        </ul>
    </nav>
</div>

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

