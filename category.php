<?php 
get_header();

$id_categoria = get_query_var( 'cat' );

$array = ['category'=> $id_categoria ];

$posts = get_posts($array);

if (count($posts) == 0){
    echo "Sem post para essa categoria";
}

else {
    echo "<div class='reportagens'>";
    echo "<ul>";

    foreach($posts as $post){

        $permalink = get_permalink($post);

        echo "<li>";
        echo "<div>";
        echo "<h2><a href='{$permalink}'>".$post->post_title."</a></h2>";
        echo $post->post_date." ";
        echo $post->post_excerpt;
        echo "</div>";

        $thumb = get_the_post_thumbnail($post);
        echo $thumb;
        echo "</li>";
    
        echo "<hr>";
    }
    echo "</ul>";
    echo "</div>";
}
echo "<div class='voltar'>";
echo "<a href='index.html'>Início</a>";
echo "</div>";

get_footer();
?>
