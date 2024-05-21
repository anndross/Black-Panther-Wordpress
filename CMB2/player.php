<?php
add_action('cmb2_admin_init', 'cmb2_fields_player');
function cmb2_fields_player()
{
    $cmb = new_cmb2_box([
        'id' => 'fields_player',
        'title' => 'Jogadora',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'templates/player.php'
        ]
    ]);
    $cmb->add_field([
        'name' => 'Imagem',
        'id' => 'player_image',
        'type' => 'file',
        'options' => [
            'url' => false
        ]
    ]);

    $cmb->add_field([
        'name' => 'Primeiro Nome',
        'id' => 'player_first_name',
        'type' => 'text',
    ]);
    $cmb->add_field([
        'name' => 'Sobrenome',
        'id' => 'player_surname',
        'type' => 'text',
    ]);
    $cmb->add_field([
        'name' => 'Altura',
        'id' => 'player_height',
        'type' => 'text',
    ]);

    $aditional_information = $cmb->add_field([
        'name' => 'Informações adicionais',
        'id' => 'player_aditional_information',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Informação adicional {#}',
            'add_button' => 'Adicionar informação',
            'remove_button' => 'Remover informação',
            'sortable' => true
        ]
    ]);

    $cmb->add_group_field($aditional_information, [
        'name' => 'Título',
        'id' => 'player_aditional_information_title',
        'type' => 'text',
    ]);
    $cmb->add_group_field($aditional_information, [
        'name' => 'Informação',
        'id' => 'player_aditional_information_info',
        'type' => 'text',
    ]);
}
?>