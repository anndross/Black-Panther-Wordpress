<?php
add_action('cmb2_admin_init', 'cmb2_fields_home_where_we_play');
function cmb2_fields_home_where_we_play()
{
    $cmb = new_cmb2_box([
        'id' => 'fields_home_where_we_play',
        'title' => 'Aonde Jogamos',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'templates/home.php'
        ]
    ]);

    $cmb->add_field([
        'name' => 'Título',
        'id' => 'home_where_we_play_title',
        'type' => 'text',
    ]);
    $cmb->add_field([
        'name' => 'Descrição - Primeiro Parágrafo',
        'id' => 'home_where_we_play_description_first',
        'type' => 'textarea',
    ]);
    $cmb->add_field([
        'name' => 'Descrição - Segundo Parágrafo',
        'id' => 'home_where_we_play_description_second',
        'type' => 'textarea',
    ]);
}
;
?>