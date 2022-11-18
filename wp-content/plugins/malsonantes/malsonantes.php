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


function Crearbasededatos(){
    global $wpdb;

    $charset_collate = $wpdb->get_charset_collate();

// le añado el prefijo a la tabla
    $table_name = $wpdb->prefix . 'dam';

// creamos la sentencia sql

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
id mediumint(9) NOT NULL AUTO_INCREMENT,
time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
name tinytext NOT NULL,
text text NOT NULL,
url varchar(55) DEFAULT '' NOT NULL,
PRIMARY KEY (id)
) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}