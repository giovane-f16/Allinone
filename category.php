<?php 
get_header();

// Retorna o ID da categoria. get_query_var recupera o valor de uma variável de consulta na classe wp_query
$id_categoria = get_query_var( 'cat' );

if (isset($_GET["pagina"])) { 
    $page = $_GET["pagina"];
    $numero = (int)$page;
}
else {
    $numero = 1;
}

// Criando um array que recebe o ID da categoria em cada página correspondente
$array = ['category'=> $id_categoria, 'numberposts'=> 5, 'paged' => $numero];

// Variável recebendo os posts referentes a aquela categoria determinada no $array
$posts = get_posts($array);

// Condição para exibir mensagem, caso não tenha nenhum post vinculado a uma categoria
if (count($posts) == 0){
    echo "Sem post para essa categoria";
}

else {
    echo "<div class='reportagens'>";
    echo "<ul>";

    /* Looping percorrendo todos os posts, que estão vinculados naquela categoria, atribuindo os valores para 
    a variável post */
    foreach($posts as $post){

        $permalink = get_permalink($post); // Recupera o link completo da postagem
        echo "<li>";
        echo "<div class='titulo_reportagem'>";
        echo "<h2><a href='{$permalink}'>".$post->post_title."</a></h2>"; // Criando âncora com o título do post
        
        // Tratando a String data, para ocultar a hora da postagem
        $data = $post->post_date;
        $data_mod = substr($data, 0, 11);
        echo $data_mod." ";

        echo $post->post_excerpt; // Imprimindo o resumo da postagem
        echo "</div>";
        $thumb = get_the_post_thumbnail($post); // Imprimindo a thumbnail do post
        echo $thumb;
        echo "</li>";
    
        echo "<hr>";
    }
    echo "</ul>";
    echo "</div>";
}
Botao_tela_inicial();

$categorias = get_category($id_categoria);
$total_categoria = $categorias->category_count;
$total_paginas = ceil($total_categoria / 5);

echo "<div class='paginas'>";

for($i=1; $i <= $total_paginas; $i++){
    echo "<a href='./?pagina=$i'>{$i}</a>";
}
echo "</div>";
get_footer();
?>
