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

function Pegar_valor_ipca(){
    // Iniciando a conexão
    $conec = curl_init();
    $endpoint = 'https://api.bcb.gov.br/dados/serie/bcdata.sgs.10844/dados/ultimos/10';
    $params = array('formato' => 'json');
    $url = $endpoint . '?' . http_build_query($params);

    curl_setopt($conec, CURLOPT_URL, $url);
    curl_setopt($conec, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($conec, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    curl_setopt($conec, CURLOPT_CUSTOMREQUEST, "GET");
    $exec_curl = curl_exec($conec);
    $resultado = json_decode($exec_curl, true);
    
    curl_close($conec);
    return $resultado;
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

// Função para pegar o título do vídeo pelo URL // https://www.youtube.com/watch?v=dZVVGgM4yXY
function pegar_title(){
    $url_video = "https://www.youtube.com/watch?v=guJsZZgkWr0";
    $saida = simplexml_load_file("https://www.youtube.com/oembed?url=".$url_video."&format=xml");
    echo $saida->title;
    return $saida;
}

?>

