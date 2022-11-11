<?php


/*
Plugin Name: Palabras Malsonantes
Plugin URI: http://wordpress.org/plugins/palabras_malsonantes/
Description: Mi primer plugin
Author: marta
Version: 1.0
Author URI: http://10.0.9.25
 */

/*
 * Reemplaza palabras
 */
function cambiar_malsonantes($text)
{
    return str_replace('caca', 'popo', $text);
}


/*
 * Cambia el contenido del post
 */
add_filter('the_content', 'cambiar-malsonantes');


