<?php
// Template Name: Home
?>

<?php get_template_part('parts/header') ?>

<?php
function break_words($text)
{
    echo join('<br/>', explode(' ', $text));
}
?>

<section class="hero" id="home">
    <div class="hero__sections hero__team" style="background-image: url(<?php the_field('first_background'); ?>;)">
        <h2 class="hero__subtitle">
            <?php the_field('first_subtitle') ?>
        </h2>
        <h1 class="hero__title">
            <?php break_words(get_field('first_title')) ?>
        </h1>
    </div>

    <div class="hero__sections hero__training" style="background-image: url(<?php the_field('second_background'); ?>;)">
        <h2 class="hero__subtitle"><?php the_field('second_subtitle') ?></h2>
        <h2 class="hero__subtitle--large">
            <?php break_words(get_field('second_title')) ?>
        </h2>
    </div>

    <div class="hero__sections hero__players"
        style="background-image: url(<?php echo the_field('third_background'); ?>;)">
        <h2 class="hero__subtitle"><?php the_field('third_subtitle') ?></h2>
        <h2 class="hero__subtitle--large">
            <?php break_words(get_field('third_title')) ?>
        </h2>
    </div>

    <div class="hero__sections hero__arena"
        style="background-image: url(<?php echo the_field('fourth_background'); ?>;)">
        <h2 class="hero__subtitle"><?php the_field('third_subtitle') ?></h2>
        <h2 class="hero__subtitle--large">
            <?php break_words(get_field('fourth_title')) ?>
        </h2>
    </div>
</section>

<section class="last-games">
    <div class="last-games--desktop">
        <h2 class="last-games__subtitle">
            <?php break_words(get_field('title_last_games')) ?>
        </h2>

        <div class="last-games__games">
            <div class="last-games__game">
                <p class="last-games__information">
                    14.02.23 <?php echo "&nbsp&nbsp&nbsp" ?> Copa Fut7
                    <?php echo "&nbsp" ?><strong>Final</strong>
                </p>

                <div class="last-games__team">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg"
                        alt="black panther logo" height="48px" width="48px" />
                    <span class="last-games__team__name">BLK</span>
                    <div class="last-games__team__points">3</div>
                </div>

                <div class="last-games__team">
                    <img class="last-games__team__img"
                        src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg"
                        alt="black panther logo" height="48px" width="48px" />
                    <span class="last-games__team__name">BLK</span>
                    <div class="last-games__team__points">3</div>
                </div>
            </div>

            <div class="last-games__game">
                <p class="last-games__information">
                    14.02.23 <?php echo "&nbsp&nbsp&nbsp" ?> Copa Fut7
                    <?php echo "&nbsp" ?><strong>Final</strong>
                </p>

                <div class="last-games__team">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg"
                        alt="black panther logo" height="48px" width="48px" />
                    <span class="last-games__team__name">BLK</span>
                    <div class="last-games__team__points">3</div>
                </div>

                <div class="last-games__team">
                    <img class="last-games__team__img"
                        src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg"
                        alt="black panther logo" height="48px" width="48px" />
                    <span class="last-games__team__name">BLK</span>
                    <div class="last-games__team__points">3</div>
                </div>
            </div>

            <div class="last-games__game">
                <p class="last-games__information">
                    14.02.23 <?php echo "&nbsp&nbsp&nbsp" ?> Copa Fut7
                    <?php echo "&nbsp" ?><strong>Final</strong>
                </p>

                <div class="last-games__team">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg"
                        alt="black panther logo" height="48px" width="48px" />
                    <span class="last-games__team__name">BLK</span>
                    <div class="last-games__team__points">3</div>
                </div>

                <div class="last-games__team">
                    <img class="last-games__team__img"
                        src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg"
                        alt="black panther logo" height="48px" width="48px" />
                    <span class="last-games__team__name">BLK</span>
                    <div class="last-games__team__points">3</div>
                </div>
            </div>

            <div class="last-games__game">
                <p class="last-games__information">
                    14.02.23 <?php echo "&nbsp&nbsp&nbsp" ?> Copa Fut7
                    <?php echo "&nbsp" ?><strong>Final</strong>
                </p>

                <div class="last-games__team">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg"
                        alt="black panther logo" height="48px" width="48px" />
                    <span class="last-games__team__name">BLK</span>
                    <div class="last-games__team__points">3</div>
                </div>

                <div class="last-games__team">
                    <img class="last-games__team__img"
                        src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg"
                        alt="black panther logo" height="48px" width="48px" />
                    <span class="last-games__team__name">BLK</span>
                    <div class="last-games__team__points">3</div>
                </div>
            </div>
        </div>
    </div>

    <!-- TODO: adicionar últimos jogos [mobile] -->
    <div class="last-games--mobile">
        <div class="last-games__header">
            <h2 class="last-games__subtitle">
                <?php the_field('titlelastgames') ?>
            </h2>

            <div class="last-games__information-wrapper">
                <p class="last-games__information">
                    14.02.23 <?php echo "&nbsp&nbsp&nbsp" ?> Copa Fut7
                    <?php echo "&nbsp" ?><strong>Final</strong>
                </p>
                <p class="last-games__information">
                    14.02.23 <?php echo "&nbsp&nbsp&nbsp" ?> Copa Fut7
                    <?php echo "&nbsp" ?><strong>Final</strong>
                </p>
                <p class="last-games__information">
                    14.02.23 <?php echo "&nbsp&nbsp&nbsp" ?> Copa Fut7
                    <?php echo "&nbsp" ?><strong>Final</strong>
                </p>
                <p class="last-games__information">
                    14.02.23 <?php echo "&nbsp&nbsp&nbsp" ?> Copa Fut7
                    <?php echo "&nbsp" ?><strong>Final</strong>
                </p>
            </div>
        </div>

        <div class="last-games__teams-wrapper">
            <div class="last-games__team">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="black panther logo"
                    height="48px" width="48px" />
                <span class="last-games__team__name">BLK</span>
                <div class="last-games__team__points">3</div>
            </div>

            <div class="last-games__team">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="black panther logo"
                    height="48px" width="48px" />
                <span class="last-games__team__name">BLK</span>
                <div class="last-games__team__points">3</div>
            </div>

            <div class="last-games__team">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="black panther logo"
                    height="48px" width="48px" />
                <span class="last-games__team__name">BLK</span>
                <div class="last-games__team__points">3</div>
            </div>

            <div class="last-games__team">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="black panther logo"
                    height="48px" width="48px" />
                <span class="last-games__team__name">BLK</span>
                <div class="last-games__team__points">3</div>
            </div>
        </div>
    </div>
</section>


<section class="who-we-are" id="quem-somos">
    <div class="who-we-are__description">
        <h2 class="who-we-are__subtitle fade-out">QUEM SOMOS</h2>
        <p class="who-we-are__text fade-out">Lorem ipsum dolor sit amet consectetur. Curabitur sed pretium elit in.
            Pellentesque leo risus nunc enim. At scelerisque eget vitae vel dictum laoreet senectus aliquam. </p>
        <?php get_template_part('parts/participate-btn') ?>
    </div>

    <div class="who-we-are__topic">
        <div class="who-we-are__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ball-icon.svg" alt="">
        </div>
        <h3 class="who-we-are__topic__subtitle fade-out">Ferramenta de inclusão</h3>
        <p class="who-we-are__topic__text fade-out">Lorem ipsum dolor sit amet consectetur. Curabitur sed pretium elit
            in. Pellentesque leo risus nunc enim. </p>
    </div>

    <div class="who-we-are__topic">
        <div class="who-we-are__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ball-icon.svg" alt="">
        </div>
        <h3 class="who-we-are__topic__subtitle fade-out">Ferramenta de inclusão</h3>
        <p class="who-we-are__topic__text fade-out">Lorem ipsum dolor sit amet consectetur. Curabitur sed pretium elit
            in. Pellentesque leo risus nunc enim. </p>
    </div>

    <div class="who-we-are__topic">
        <div class="who-we-are__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ball-icon.svg" alt="">
        </div>
        <h3 class="who-we-are__topic__subtitle fade-out">Ferramenta de inclusão</h3>
        <p class="who-we-are__topic__text fade-out">Lorem ipsum dolor sit amet consectetur. Curabitur sed pretium elit
            in. Pellentesque leo risus nunc enim. </p>
    </div>

    <div class="who-we-are__topic">
        <div class="who-we-are__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ball-icon.svg" alt="">
        </div>
        <h3 class="who-we-are__topic__subtitle fade-out">Ferramenta de inclusão</h3>
        <p class="who-we-are__topic__text fade-out">Lorem ipsum dolor sit amet consectetur. Curabitur sed pretium elit
            in. Pellentesque leo risus nunc enim. </p>
    </div>
</section>

<section class="our-training" id="nossos-treinos">
    <div class="our-training__description">
        <h2 class="our-training__subtitle fade-out">NOSSOS TREINOS</h2>
        <p class="our-training__text fade-out">Lorem ipsum dolor sit amet consectetur. Curabitur sed pretium elit in.
            Pellentesque leo risus nunc enim. At scelerisque eget vitae vel dictum laoreet senectus aliquam. </p>
        <?php get_template_part('parts/participate-btn') ?>
    </div>

    <div class="our-training__schedules">
        <img class="our-training__logo-jr-arena"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/jr-do-arena-logo.svg" alt="">

        <div class="our-training__schedule">
            <div class="our-training__day">
                <h3>Seg</h3>
                <div class="our-training__hour">
                    <span>6:30h - 8h</span>
                    <span>20h - 21:30h</span>
                </div>
            </div>

            <div class="our-training__day">
                <h3>Qua</h3>
                <div class="our-training__hour">
                    <span>6:30h - 8h</span>
                    <span>20h - 21:30h</span>
                </div>
            </div>

            <div class="our-training__day">
                <h3>Sex</h3>
                <div class="our-training__hour">
                    <span>6:30h - 8h</span>
                    <span>20h - 21:30h</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('parts/carousel') ?>

<section class="where-we-play" id="aonde-jogamos">
    <div class="where-we-play__content-wrapper">
        <h2 class="where-we-play__title fade-out">AONDE JOGAMOS</h2>
        <p class="where-we-play__paragraph fade-out">Lorem ipsum dolor sit amet consectetur. Curabitur sed pretium elit
            in. Pellentesque leo risus nunc enim. At scelerisque eget vitae vel dictum laoreet senectus aliquam.
            Pellentesque nisi mauris semper pharetra volutpat in lorem mauris.</p>
        <p class="where-we-play__paragraph--secondary fade-out">Lorem ipsum dolor sit amet consectetur. Sem aenean
            elementum nec nunc proin parturient mattis turpis velit. Mattis gravida nulla quis sagittis ultrices aenean
            neque. </p>
        <?php get_template_part('parts/participate-btn') ?>
    </div>
</section>

<?php get_template_part('parts/footer') ?>