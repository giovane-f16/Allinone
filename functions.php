<?php

// Adicionando no WP a área de Thumbnails nos Posts
add_action ("after_setup_theme", function() {
    add_theme_support("post-thumbnails"); 
});

// Criando a função para dinamizar as categorias
function Exibir_categorias(){
    $array = ["hide_empty"=>false];
    $categorias = get_terms($array);

    foreach ($categorias as $categoria) {
        $link = get_term_link($categoria);
        echo "<li> <a href='{$link}'>{$categoria->name}</a></li>";
    }
}

function Pegar_post_musica(){
    $post = get_post(83);
    $link = get_permalink($post);
    echo "<a href='{$link}'>{$post->post_title}</a>";
}

function Pegar_post_esporte(){
    $post = get_post(73);
    $link = get_permalink($post);
    echo "<a href='{$link}'>{$post->post_title}</a>";
}

function Pegar_post_ofertas(){
    $post = get_post(87);
    $link = get_permalink($post);
    echo "<a href='{$link}'>{$post->post_title}</a>";
}

function Botao_tela_inicial(){
    echo "<nav class='botao_inicio'>";
    echo "<a href='/wordpress'>Início</a>";
    echo "</nav>";
}

function Botao_voltar(){
    echo "<nav class='botao_voltar'>";
    echo "<input type='button' value='Voltar' onClick='history.go(-1)'>";
    echo "</nav>";
}

?>

