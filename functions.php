<?php

require_once get_template_directory() . '/cmb2/load.php';

add_action('template_redirect', 'redirect_player');

function redirect_player()
{
    if (is_page('jogadora')) {
        wp_redirect(home_url('/jogadora/beatriz'));
        exit();
    }
}

// add_action('cmb2_admin_init', 'cmb2_fields_home');
// function cmb2_fields_home()
// {
//     $cmb = new_cmb2_box([
//         'id' => 'home_box',
//         'title' => 'Black Panther',
//         'object_types' => ['page'],
//         'show_on' => [
//             'key' => 'page-template',
//             'value' => 'templates/home.php',
//         ]
//     ]);

//     $cmb->add_field([
//         'name' => 'Primeiro Subtítulo',
//         'id' => 'primeirosubtitulo',
//         'type' => 'text',
//     ]);

//     $cmb->add_field([
//         'name' => 'Primeiro Título',
//         'id' => 'primeirotitulo',
//         'type' => 'text',
//         'sanitization_cb' => false
//     ]);

//     $cmb->add_field([
//         'name' => 'Segundo Subtítulo',
//         'id' => 'segundosubtitulo',
//         'type' => 'text',
//     ]);

//     $cmb->add_field([
//         'name' => 'Segundo Título',
//         'id' => 'segundotitulo',
//         'type' => 'text',
//         'sanitization_cb' => false
//     ]);

//     $cmb->add_field([
//         'name' => 'Terceiro Subtítulo',
//         'id' => 'terceirosubtitulo',
//         'type' => 'text',
//         'sanitization_cb' => false
//     ]);


//     $cmb->add_field([
//         'name' => 'Terceiro Título',
//         'id' => 'terceirotitulo',
//         'type' => 'text',
//         'sanitization_cb' => false
//     ]);

//     $cmb->add_field([
//         'name' => 'Quarto Subtítulo',
//         'id' => 'quartosubtitulo',
//         'type' => 'text',
//     ]);

//     $cmb->add_field([
//         'name' => 'Quarto Título',
//         'id' => 'quartotitulo',
//         'type' => 'text',
//         'sanitization_cb' => false
//     ]);

//     $cmb->add_field([
//         'name' => 'Título da Terceira seção',
//         'id' => 'tituloterceirasecao',
//         'type' => 'text',
//         'sanitization_cb' => false
//     ]);
// }
?>