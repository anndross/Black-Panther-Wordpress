<?php

function get_field($key, $page_id = 0)
{
    $id = $page_id !== 0 ? $page_id : get_the_id();

    return get_post_meta($id, $key, true);
}
;

function the_field($key, $page_id = 0)
{
    $id = $page_id !== 0 ? $page_id : get_the_id();

    echo get_field($key, $id);
}
;

require_once get_template_directory() . '/CMB2/home.php';
require_once get_template_directory() . '/CMB2/last-games.php';
require_once get_template_directory() . '/CMB2/player.php';
require_once get_template_directory() . '/CMB2/where-we-play.php';
require_once get_template_directory() . '/CMB2/who-we-are.php';
require_once get_template_directory() . '/CMB2/our-training.php';
require_once get_template_directory() . '/CMB2/our-players.php';
?>