<?php

/**
 * Plugin Name: My Block
 * Plugin URI: google.com
 * Description: My block
 * Author: Nermin
 * Author URI: https://google.com
 */

function blocks_course_myblock_init() {
    register_block_type_from_metadata( __DIR__ );
}

add_action( "init", "blocks_course_myblock_init" );