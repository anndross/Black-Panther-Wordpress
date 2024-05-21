        <footer class="footer">
            <div class="footer__panther">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/panther.svg" alt="imagem de pantera">
            </div>
            <div class="footer__content">
                <div class="footer__support">
                    <span>apoio</span>
                    <nav>
                        <div class="footer__supporter">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/viking-logo.svg" alt="">
                        </div>
                        <div class="footer__supporter">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/jr-do-arena-logo.svg" alt="">
                        </div>
                        <div class="footer__supporter">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/health-plast-logo.svg" alt="">
                        </div>
                        <div class="footer__supporter">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/the-alfred-logo.svg" alt="">
                        </div>
                    </nav>
                </div>

                <span class="footer__copyright">© 2023 — Copyright</span>

                <div class="footer__follow-team">
                    <span>Siga nosso time</span>
                    <a href="">blackpanther@gmail.com</a>
                </div>

                <div class="footer__social-medias">
                    <div class="footer__youtube">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/youtube.svg" alt="">
                    </div>
                    <div class="footer__whatsapp">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/youtube.svg" alt="">
                    </div>
                    <div class="footer__facebook">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/facebook.svg" alt="">
                    </div>
                    <div class="footer__instagram">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/instagram.svg" alt="">
                    </div>
                </div>
            </div>
        </footer>



        <!-- slick script start -->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <!-- slick script end -->

        <script>
            const observer = new IntersectionObserver((entries) => {
                const [entry] = entries
                
                if(entry.isIntersecting) {
                    entry.target.classList.remove('fade-out')
                    entry.target.classList.add('fade-in')
                } else {
                    entry.target.classList.remove('fade-in')
                    entry.target.classList.add('fade-out')
                }
            })

            const fadeOutElements = document.querySelectorAll('.fade-out')
            
            const elementsToObserve = [...fadeOutElements]

            for(const element of elementsToObserve) {
                observer.observe(element)
            }


            // open menu by icon click
            $('.js-header__menu-icon').on('click', () => {
                $('.js-header__menu-icon').toggleClass('header__menu-icon--active')
                $('.js-header__menu').toggleClass('header__menu--active')
            })

            // close menu mobile when click on a link 
            $('.js-links-menu-mobile').on('click', () => {
                $('.js-header__menu-icon').removeClass('header__menu-icon--active')
                $('.js-header__menu').removeClass('header__menu--active')
            })


            // open modal by participate-btn click 
            $(document).on('click', (event) => {
                if (event.target.classList.contains('js-participate-btn')) {
                    const modal = $(event.target).prev()
                    modal.toggleClass('c-participate-modal--active')
                }
            });

            // close modal by overlay click 
            $('.js-participate-modal__overlay').on('click', (event) => {
                $('.c-participate-modal--active').removeClass('c-participate-modal--active')
            });
            
            $(document).ready(function(){
                $('.js-slider').slick({
                    slidesToShow: 4,
                    prevArrow: $('.js-slide-prev'),
                    nextArrow: $('.js-slide-next'),
                    responsive: [
                        {
                            breakpoint: 1100,
                            settings: {
                                slidesToShow: 3,
                            }
                        },
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 2,
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                            }
                        }
                    ]
                });
            });
        </script>

        <!-- footer wordpress -->
        <?php wp_footer() ?>
        <!-- fecha footer wordpress -->
    </body>
</html>