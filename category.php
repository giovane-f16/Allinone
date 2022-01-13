<?php 
get_header(); 

$id_categoria = get_query_var( 'cat' );

$array = ['category'=> $id_categoria ];

$posts = get_posts($array);

if (count($posts) == 0){
    echo "Sem post para essa categoria";
}

else {
    echo "<ul>";
    foreach($posts as $post){
        echo "<li><h1>".$post->post_title."</h1>";
        echo $post->post_date." ";
        echo $post->post_excerpt."<br>";
        echo "<hr>";
    }

    echo "</ul>";
}


get_footer();
?>