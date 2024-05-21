<?php
add_action('cmb2_admin_init', 'cmb2_home_last_games');
function cmb2_home_last_games()
{
    $cmb = new_cmb2_box([
        'id' => 'fields_home_last_games',
        'title' => 'Últimos Jogos',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'templates/home.php'
        ]
    ]);

    $cmb->add_field([
        'name' => 'Título',
        'id' => 'title_last_games',
        'type' => 'text',
    ]);


    $games = $cmb->add_field([
        'name' => 'Jogos',
        'id' => 'last_games',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Jogo {#}',
            'add_button' => 'Adicionar Jogo',
            'remove_button' => 'Remover Jogo',
            'sortable' => true
        ]
    ]);

    $cmb->add_group_field($games, [
        'name' => 'Data',
        'id' => 'last_games_date',
        'type' => 'text',
    ]);


    $cmb->add_group_field($games, [
        'name' => 'Data',
        'id' => 'last_games_date',
        'type' => 'text',
    ]);
    $cmb->add_group_field($games, [
        'name' => 'Campeonato',
        'id' => 'last_games_championship',
        'type' => 'text',
    ]);
    $cmb->add_group_field($games, [
        'name' => 'Partida',
        'id' => 'last_games_match',
        'type' => 'text',
    ]);
    $cmb->add_group_field($games, [
        'name' => 'Primeiro time - nome',
        'id' => 'last_games_team_first',
        'type' => 'text',
    ]);
    $cmb->add_group_field($games, [
        'name' => 'Primeiro time - imagem',
        'id' => 'last_games_team_first_image',
        'type' => 'text',
    ]);
    $cmb->add_group_field($games, [
        'name' => 'Primeiro time - pontos',
        'id' => 'last_games_team_first_ponints',
        'type' => 'text',
    ]);

    $cmb->add_group_field($games, [
        'name' => 'Segundo time - nome',
        'id' => 'last_games_team_second',
        'type' => 'text',
    ]);
    $cmb->add_group_field($games, [
        'name' => 'Segundo time - imagem',
        'id' => 'last_games_team_second_image',
        'type' => 'text',
    ]);
    $cmb->add_group_field($games, [
        'name' => 'Segundo time - pontos',
        'id' => 'last_games_team_second_points',
        'type' => 'text',
    ]);



    // $games_teams = $cmb->add_group_field($games, [
    //     'name' => 'Time 1',
    //     'id' => 'last_games_date',
    //     'type' => 'text',
    // ]);

    // $cmb->add_group_field($games_teams, [
    //     'id' => 'my_subgroup_element_id',
    //     'name' => 'Subgroup Element',
    //     'type' => 'text',
    // ]);
}
?>