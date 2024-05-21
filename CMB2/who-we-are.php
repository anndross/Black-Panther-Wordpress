<?php
add_action('cmb2_admin_init', 'cmb2_fields_who_we_are');
function cmb2_fields_who_we_are()
{
    $cmb = new_cmb2_box([
        'id' => 'fields_who_we_are',
        'title' => 'Quem somos',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'templates/home.php'
        ]
    ]);

    $cmb->add_field([
        'name' => 'Título',
        'id' => 'who_we_are_title',
        'type' => 'text',
    ]);
    $cmb->add_field([
        'name' => 'Descrição',
        'id' => 'who_we_are_description',
        'type' => 'textarea',
    ]);

    $sections = $cmb->add_field([
        'name' => 'Seções',
        'id' => 'who_we_are_sections_group',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Seção {#}',
            'add_button' => 'Adicionar seção',
            'remove_button' => 'Remover seção',
        ]
    ]);

    $cmb->add_group_field($sections, [
        'name' => 'Título',
        'id' => 'who_we_are_section_title',
        'type' => 'text',
    ]);

    $cmb->add_group_field($sections, [
        'name' => 'Descrição',
        'id' => 'who_we_are_section_subtitle',
        'type' => 'textarea'
    ]);
}
?>