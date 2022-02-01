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

function Pegar_valor_dolar() {
    // Iniciando conexão com o link que queremos acessar, enviando os parâmetros (get ?)
    $ch = curl_init("http://economia.awesomeapi.com.br/json/last/USD-BRL");
                    
    // Definindo configurações para a nossa conexão (Parâmetros: conexão, comando, valor)
    curl_setopt($ch, CURLOPT_HEADER, 0); // Desativa retorno das informações do cabeçalho do server
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // Desativa verificação SSL
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // Desativa verificação SSL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Ativamos para permitir receber os dados enviados pelo server
    
    $res_curl = curl_exec($ch); // Executamos a nossa conexão

    $resultado = json_decode($res_curl, true); // Convertendo a string JSON para Array
        
    echo $resultado["USDBRL"]["low"]; // Pegando o valor da chave low, que está dentro de dois arrays
    
    curl_close($ch); // Fechando a conexão
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

    var_dump($resultado);

    curl_close($conec);
}

function Pegar_valor_euro(){
    $ch = curl_init("http://economia.awesomeapi.com.br/json/last/EUR-BRL"); // Iniciando a conexão

    curl_setopt($ch, CURLOPT_HEADER, 0); // Desativando o retorno das informações de cabeçalho
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // Desativando verificação SSL
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // Desativando verificação SSL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Permitindo o retorno das informações

    $res_curl = curl_exec($ch); // Executando a conexão

    $resultado = json_decode($res_curl, true); // Conveterndo de Json para Array

    // print_r($resultado); Outra forma de visualizar o array multidimensional

    echo $resultado["EURBRL"]["low"]; // Dentro do Array "EURBRL", estamos pegando a informação da chave "low"

    curl_close($ch); // Encerrando a conexão
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

function Botao_voltar(){
    echo "<div class='voltar'>";
    echo "<a href='/wordpress'>Início</a>";
    echo "</div>";
}

?>

