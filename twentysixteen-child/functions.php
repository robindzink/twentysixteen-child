<?php

function twentysixteen_child_scripts(){
	wp_enqueue_style( 'twenty_sixteen_child_fonts', 'https://fonts.googleapis.com/css?family=Indie+Flower|Open+Sans:400,400italic,700,700italic');
	wp_dequeue_style( 'twentysixteen-fonts');
}
add_action('wp_enqueue_scripts', 'twentysixteen_child_scripts', 11);


?>