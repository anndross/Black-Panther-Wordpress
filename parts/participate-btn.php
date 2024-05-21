<div class="c-participate-modal js-participate-modal">
    <div class="c-participate-modal__overlay js-participate-modal__overlay"></div>

    <form class="c-participate-modal__form">
        <div class="c-participate-modal__close-icon js-participate-modal__close-icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_358_853" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                    <rect width="20" height="20" fill="#D9D9D9"/>
                </mask>
                <g mask="url(#mask0_358_853)">
                    <path d="M6.71148 13.8942L6.10571 13.2884L9.39417 9.99998L6.10571 6.73236L6.71148 6.12659L9.99994 9.41504L13.2676 6.12659L13.8733 6.73236L10.5849 9.99998L13.8733 13.2884L13.2676 13.8942L9.99994 10.6058L6.71148 13.8942Z" fill="#1C1B1F"/>
                </g>
            </svg>
        </div>

        <fieldset class="c-participate-modal__fields">
            <legend class="c-participate-modal__title">Preencha os dados abaixo</legend>
 
            <label class="c-participate-modal__label" for="name">Nome Completo</label>
            <input class="c-participate-modal__input" type="text" id="name" />

            <label class="c-participate-modal__label" for="email">Endereço de email</label>
            <input class="c-participate-modal__input" type="email" id="email" />

            <label class="c-participate-modal__label" for="phone">Telefone</label>
            <input class="c-participate-modal__input" type="text" id="phone" />

            <label class="c-participate-modal__label" for="position">Posição</label>
            <input class="c-participate-modal__input" type="text" id="position" />

            <label class="c-participate-modal__label" for="about-your-fut">
                Fale um pouco sobre você e como 
                o futebol influenciou sua vida.
            </label>
            <input class="c-participate-modal__input" type="text" id="about-your-fut" />
        </fieldset>

        <div class="c-participate-modal__footer">
            <a class="c-participate-modal__logo" href="/#home">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg"  width="40px" height="40px"/>
            </a>

            <button class="c-participate-btn" type="submit">participar agora!</button>
        </div>
    </form>
</div>

<button class="c-participate-btn js-participate-btn">
    participe agora!
</button> 