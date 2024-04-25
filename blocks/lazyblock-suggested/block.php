<section class="suggested section-purple section-decoration" id="polecane">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spociak-filet.png" alt=""
        class="section-icon section-icon-desktop section-icon-first">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spociak-pad-thai.png" alt=""
        class="section-icon section-icon-desktop section-icon-second">

    <div class="container">
        <h2 class="section-title">Polecane przez ekipe Spocika</h2>

        <div class="suggested__top">

            <div class="suggested__btns">
                <button id="pizza" class="suggested__btn active">pizzka</button>
                <button id="padthai" class="suggested__btn">Pad-thai</button>
                <button id="drink" class="suggested__btn">Drinki</button>
            </div>


        </div>
        <div class="suggested__boxes">
        <?php foreach( $attributes['suggested'] as $box ): ?>
            <div id="<?php echo $box['id']; ?>" class="suggested__box">
                <div class="suggested__content suggested_content-top">
                <?php if ( isset( $box['img']['url'] ) ) : ?>
                    <img class="suggested__box-img" src="<?php echo esc_url( $box['img']['url'] ); ?>" alt="<?php echo esc_attr( $box['img']['alt'] ); ?>">
                        <?php endif; ?>



                </div>
                <div class="suggested__content suggested__content-middle">
                    <div class="suggested__content-details">
                        <div class="suggested__content-titles">
                            <p class="suggested__content-title">Nazwa:</p>
                            <p class="suggested__content-price"><?php echo $box['title']; ?></p>
                        </div>
                        <div class="suggested__content-titles suggested__content-ingridients">
                            <p class="suggested__content-title">Składniki:</p>
                            <p class="suggested__content-ingridient"><?php echo $box['ingridients']; ?></p>
                        </div>
                        <div class="suggested__content-prices">
                            <p class="suggested__content-title">Cena:</p>
                            <p class="suggested__content-price"><?php echo $box['price']; ?></p>
                        </div>
                        <div class="suggested__content-spicy">
                            <p class="suggested__content-title">Ostrość:</p>
                            <div class="suggested__content-icons">
                            <?php if ( isset( $box['taste-img']['url'] ) ) : ?>
                                <img class="suggested__content-icon" src="<?php echo esc_url( $box['taste-img']['url'] ); ?>" alt="<?php echo esc_attr( $box['taste-img']['alt'] ); ?>" >
                                
                                    <?php endif; ?>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="suggested__content suggested__content-bottom">
                    <!-- <a class="suggested__content-order suggested__content-order--mobile" href="tel:+48537895760">
                        <i class='bx bxs-phone'></i>

                    </a>
                    <a class="suggested__content-order suggested__content-order--pyszne"
                        href="https://www.pyszne.pl/menu/spot-pizza-opole">

                        Pyszne.pl
                    </a> -->
                    <a class="suggested__content-order suggested__content-order--pyszne suggested__content-order--phone"
                        href="tel:+48665200525">

                        <i class='bx bxs-phone'></i> zamów
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
           






        </div>
        <a href="<?php echo get_template_directory_uri(); ?>/assets/files/menu-2024-v2.pdf" target="_blank"
            class="suggested__menu">sprawdź całe menu</a>
    </div>

</section>