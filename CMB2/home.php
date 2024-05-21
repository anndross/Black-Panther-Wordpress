<?php
add_action('cmb2_admin_init', 'cmb2_fields_home_first_section');
function cmb2_fields_home_first_section()
{
    $cmb = new_cmb2_box([
        'id' => 'fields_home_first',
        'title' => 'Home',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'templates/home.php'
        ]
    ]);

    $sections1 = $cmb->add_field([
        'name' => 'Seções',
        'id' => 'first_section',
        'type' => 'group',
        'repeatable' => false,
        'options' => [
            'group_title' => 'Seção {#}',
            'add_button' => 'Adicionar Jogo',
            'remove_button' => 'Remover Jogo',
            'sortable' => true
        ]
    ]);

    $cmb->add_group_field($sections1, [
        'name' => 'Subtítulo',
        'id' => 'home_subtitle',
        'type' => 'text',
    ]);

    $cmb->add_group_field($sections1, [
        'name' => 'Título',
        'id' => 'home_title',
        'type' => 'text',
    ]);

    $cmb->add_group_field($sections1, [
        'name' => 'Background',
        'id' => 'home_background',
        'type' => 'file',
        'options' => [
            'url' => false
        ]
    ]);

    $sections2 = $cmb->add_field([
        'name' => 'Seções',
        'id' => 'second_section',
        'type' => 'group',
        'repeatable' => false,
        'options' => [
            'group_title' => 'Seção {#}',
            'add_button' => 'Adicionar Jogo',
            'remove_button' => 'Remover Jogo',
            'sortable' => true
        ]
    ]);

    $cmb->add_group_field($sections2, [
        'name' => 'Subtítulo',
        'id' => 'home_subtitle',
        'type' => 'text',
    ]);

    $cmb->add_group_field($sections2, [
        'name' => 'Título',
        'id' => 'home_title',
        'type' => 'text',
    ]);

    $cmb->add_group_field($sections2, [
        'name' => 'Background',
        'id' => 'home_background',
        'type' => 'file',
        'options' => [
            'url' => false
        ]
    ]);

    $sections3 = $cmb->add_field([
        'name' => 'Seções',
        'id' => 'third_section',
        'type' => 'group',
        'repeatable' => false,
        'options' => [
            'group_title' => 'Seção {#}',
            'add_button' => 'Adicionar Jogo',
            'remove_button' => 'Remover Jogo',
            'sortable' => true
        ]
    ]);

    $cmb->add_group_field($sections3, [
        'name' => 'Subtítulo',
        'id' => 'home_subtitle',
        'type' => 'text',
    ]);
    $cmb->add_group_field($sections3, [
        'name' => 'Título',
        'id' => 'home_title',
        'type' => 'text',
    ]);
    $cmb->add_group_field($sections3, [
        'name' => 'Background',
        'id' => 'home_background',
        'type' => 'file',
        'options' => [
            'url' => false
        ]
    ]);

    // $cmb->add_field([
    //     'name' => 'Título',
    //     'id' => 'first_title',
    //     'type' => 'text',
    // ]);

    // $cmb->add_field([
    //     'name' => 'Background',
    //     'id' => 'first_background',
    //     'type' => 'file',
    //     'options' => [
    //         'url' => false
    //     ]
    // ]);
}
;

add_action('cmb2_admin_init', 'cmb2_fields_home_second_section');
function cmb2_fields_home_second_section()
{
    $cmb = new_cmb2_box([
        'id' => 'fields_home_second',
        'title' => 'Home - Segunda seção',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'templates/home.php'
        ]
    ]);

    $cmb->add_field([
        'name' => 'Subtítulo',
        'id' => 'second_subtitle',
        'type' => 'text',
    ]);
    $cmb->add_field([
        'name' => 'Título',
        'id' => 'second_title',
        'type' => 'text',
    ]);
    $cmb->add_field([
        'name' => 'Background',
        'id' => 'second_background',
        'type' => 'file',
        'options' => [
            'url' => false
        ]
    ]);
}
;

add_action('cmb2_admin_init', 'cmb2_fields_home_third_section');
function cmb2_fields_home_third_section()
{
    $cmb = new_cmb2_box([
        'id' => 'fields_home_third',
        'title' => 'Home - Terceira seção',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'templates/home.php'
        ]
    ]);

    $cmb->add_field([
        'name' => 'Subtítulo',
        'id' => 'third_subtitle',
        'type' => 'text',
    ]);
    $cmb->add_field([
        'name' => 'Título',
        'id' => 'third_title',
        'type' => 'text',
    ]);
    $cmb->add_field([
        'name' => 'Background',
        'id' => 'third_background',
        'type' => 'file',
        'options' => [
            'url' => false
        ]
    ]);
}

add_action('cmb2_admin_init', 'cmb2_fields_home_fourth_section');
function cmb2_fields_home_fourth_section()
{
    $cmb = new_cmb2_box([
        'id' => 'fields_home_fourth',
        'title' => 'Home - Quarta seção',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'templates/home.php'
        ]
    ]);

    $cmb->add_field([
        'name' => 'Subtítulo',
        'id' => 'fourth_subtitle',
        'type' => 'text',
    ]);
    $cmb->add_field([
        'name' => 'Título',
        'id' => 'fourth_title',
        'type' => 'text',
    ]);
    $cmb->add_field([
        'name' => 'Background',
        'id' => 'fourth_background',
        'type' => 'file',
        'options' => [
            'url' => false
        ]
    ]);
}
?>