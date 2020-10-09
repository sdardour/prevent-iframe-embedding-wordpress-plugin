<?php

/**
 * @package prevent_iframe_embedding_wordpress_plugin
 * @version 1.0
 **/

/**
Plugin Name: Prevent iFrame Embedding
Plugin URI: https://sdardour.com/lab/2020/prevent-iframe-embedding-wordpress-plugin/
Description: A WordPress Plugin for preventing external websites from embedding your own WordPress website.
Author: lab@sdardour.com
Version: 1.0
Author URI: https://sdardour.com/lab
 **/

/* --- */

if (!function_exists("add_action")) {
    exit;
}

/* --- */

define("SDARDOURCOM_PREVENT_IFRAME_EMBEDDING_URL", plugin_dir_url(__FILE__));

/* --- */

function SDARDOURCOM_PREVENT_IFRAME_EMBEDDING_WP_ENQUEUE_SCRIPTS()
{
    wp_enqueue_script(
        "prevent-iframe-embedding",
        SDARDOURCOM_PREVENT_IFRAME_EMBEDDING_URL . "assets/prevent-iframe-embedding.js"
    );
}

add_action("wp_enqueue_scripts", "SDARDOURCOM_PREVENT_IFRAME_EMBEDDING_WP_ENQUEUE_SCRIPTS");

/* --- */
