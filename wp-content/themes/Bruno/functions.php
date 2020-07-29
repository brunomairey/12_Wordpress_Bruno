<?php
function codefactory_files(){

//register jQuery
wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.5.1.slim.min.js', array(),'1.0', true);

// register bootstrap.css file
wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');

wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(),'1.0', true);
// register bootstrap.js file
wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array(),'1.0', true);
// register style.css file
wp_enqueue_style('my-style-sheet', get_template_directory_uri().'/style.css');

}

//add the action of calling codefactory_files when the scripts are loaded
add_action('wp_enqueue_scripts', 'codefactory_files');

function register_navwalker(){

        // register the navwalker file
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

        register_nav_menus( array(
   'primary' => ( 'Top-Menu'),
   // 'secondary'=>('Footer-Menu')
) );
}
add_action( 'after_setup_theme', 'register_navwalker' );


add_theme_support('post-thumbnails');
?>

