<?php
/**
* Plugin Name: plugin basic
* Plugin URI: #
* Description: Agregue [txtplus] para añadir el contenido estatico. Este es una plantilla de plugin wordpress para empaquetar archivos estaticos en forma de complemento usando shortcode.
* Version: 1.0.0
* Author: Usiel Rivas
* Author URI: #
* Requires at least: 4.0
* Tested up to: 4.3
*
*Text Domain: #
* Domain path: /languages/
 */

function shortcode_txt() {
    return '<h2>hello word for [ Html, Vue, React y vanilla ]</h2>';
}

add_shortcode("txtplus","shortcode_txt");
