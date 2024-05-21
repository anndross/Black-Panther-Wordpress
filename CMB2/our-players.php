<?php

add_action('cmb2_admin_init', 'cmb2_fields_carousel');
function cmb2_fields_carousel()
{
    $cmb = new_cmb2_box([
        'id' => 'fields_carousel',
        'title' => 'Carousel',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'templates/home.php'
        ]
    ]);

    $cmb->add_field([
        'name' => 'Título',
        'id' => 'field_carousel_title',
        'type' => 'text',
    ]);
}
?>