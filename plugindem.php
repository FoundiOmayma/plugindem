<?php
/*
Plugin Name: plugin demonstration
Plugin URI: X
Description: Un plugin pour personaliser page d'authetification
Version: 1.0.0
Auhtor: omayma foundi
Author URI: omayma.com
Licence: gpl v2
*/


//ajouter le plugin au menu de WP
function addToMenu(){
    add_menu_page('authentication page parameter','personalisation page login','publish_posts','personnalisation-login','afficheForm','dashicons_admin_site',100);
}
add_action('admin_menu','addToMenu');

//appeler la page du formulaire(form.php)
function afficheForm(){
    require plugin_dir_path(__FILE__) . 'form.php';
}
//ajouter les fichiers css et js de bootstrap
function enqueueScripts(){
    wp_enqueue_style('mypluginstyle',plugins_url('assets/bootstrap.css',__FILE__));
    wp_enqueue_script('mypluginscript',plugins_url('assets/bootstrap.js',__FILE__));
}
add_action('admin_enqueue_scripts','enqueueScripts');


?>