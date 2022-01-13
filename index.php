<?php get_header(); ?>
<hr>
<div class="principal">
    <img src="https://image.freepik.com/vetores-gratis/texto-dourado-2022-estilo-3d-realista-sobre-fundo-branco-bokeh_1017-35372.jpg">
</div>

<hr>

<div class="meio">
    <nav>
        <ul>
            <li> <a href="http://www.dbins.com.br/dica/cotacao-do-dolar-com-php"> Dólar: <?php Pegar_valor_dolar() ?> </a></li>
            <li><a href="#">IPCA: <?php Pegar_ipca() ?> </a></li>

            <li><a href="#">Combustível</a></li>
            <li><a href="#">Salário Mínimo</a></li>
            <li><a href="#">Euro</a></li>
        </ul>
    </nav>
</div>

<div class="inferior">
    <nav> 
        <ul>
            <li><a href="#">Política</a></li>
            <li><a href="#">Esporte</a></li>
            <li><a href="#">Ofertas</a></li>
        </ul>
    </nav>
</div>

<?php get_footer(); ?>

