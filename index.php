<?php get_header(); ?>
<hr>
<div class="principal">
    <img src="https://image.freepik.com/vetores-gratis/feliz-ano-novo-2022-numeros-dourados-com-fitas-e-confetes-em-um-fundo-branco-banner-para-cabecalhos-de-ferias-de-natal-e-inverno-folhetos-de-festa_145391-965.jpg">
</div>
<hr>

<div class="meio">
    <nav>
        <ul>
            <li><a href="http://www.dbins.com.br/dica/cotacao-do-dolar-com-php">Dólar: <?php Pegar_valor_dolar() ?> </a></li>
            <li><a href="#">IPCA: <?php Pegar_ipca() ?> </a></li>
            <li><a href="#">Gasolina: </a></li>
            <li><a href="#">Salário Mínimo: </a></li>
            <li><a href="#">Euro: </a></li>
        </ul>
    </nav>
</div>

<div class="inferior">
    <nav> 
        <ul>
            <li><a href="#">Música <?php Pegar_musica() ?></a></li>
            <li><a href="#">Esporte</a></li>
            <li><a href="#">Ofertas</a></li>
        </ul>
    </nav>
</div>

<?php get_footer(); ?>

