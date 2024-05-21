<?php
add_action('cmb2_admin_init', 'cmb2_fields_home_our_training');
function cmb2_fields_home_our_training()
{
    $cmb = new_cmb2_box([
        'id' => 'fields_home_our_training',
        'title' => 'Nossos Treinos',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'templates/home.php'
        ]
    ]);

    $cmb->add_field([
        'name' => 'Título',
        'id' => 'home_our_training_title',
        'type' => 'text',
    ]);
    $cmb->add_field([
        'name' => 'Descrição',
        'id' => 'home_our_training_description',
        'type' => 'textarea',
    ]);

    $schedules = $cmb->add_field([
        'name' => 'Horários',
        'id' => 'home_our_training_schedules',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Horário {#}',
            'add_button' => 'Adicionar Horário',
            'remove_button' => 'Remover Horário',
            'sortable' => true
        ]
    ]);

    $cmb->add_group_field($schedules, [
        'name' => 'Dia',
        'id' => 'home_our_training_day',
        'type' => 'text',
    ]);

    $cmb->add_group_field($schedules, [
        'name' => 'Primeiro horário',
        'id' => 'home_our_training_first_time',
        'type' => 'text',
    ]);

    $cmb->add_group_field($schedules, [
        'name' => 'Segundo horário',
        'id' => 'home_our_training_second_time',
        'type' => 'text',
    ]);
}

?>