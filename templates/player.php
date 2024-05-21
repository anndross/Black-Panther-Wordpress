<?php
// Template Name: Jogadora
?>

<?php get_template_part('parts/header') ?>

<section class="player">
    <img class="player__img" src="<?php the_field('player_image') ?>" alt="" />
    <div class="player__information-container">
        <h1 class="player__name">
            <?php the_field('player_first_name') ?>
            <span class="player__last-name">
                <?php the_field('player_surname') ?>
            </span>
        </h1>

        <span class="player__height">
            <?php the_field('player_height') ?>
            <span class="player__height__unit">M</span>
        </span>

        <?php
        $aditional_info = get_field('player_aditional_information');

        if (is_array($aditional_info) || is_object($aditional_info)) {
            foreach ($aditional_info as $info) {
        ?>
                <div class="player__text player__position">
                    <h2><?php echo $info['player_aditional_information_title'] ?></h2>
                    <h3><?php echo $info['player_aditional_information_info'] ?></h3>
                </div>
        <?php } } ?>
        <!-- <div class="player__text player__number">
            <h2>Número</h2>
            <h3>10</h3>
        </div>

        <div class="player__text player__hometown">
            <h2>Cidade natal</h2>
            <h3>São José do Vale do Rio Preto</h3>
        </div>

        <div class="player__text player__awards">
            <h2>Premiações</h2>
            <h3>1 2 3</h3>
        </div>
        
        <div class="player__text player__sign">
            <h2>Signo</h2>
            <h3>Capricórnio</h3>
        </div> -->

        <div class="player__social-medias">
            <div class="facebook">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/facebook.svg" alt="">
            </div>
            <div class="instagram">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/instagram.svg" alt="">
            </div>
        </div>
    </div>
</section>

<?php get_template_part('parts/carousel') ?>

<?php get_template_part('parts/footer') ?>
