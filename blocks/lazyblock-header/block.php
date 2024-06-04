<header class="header">
    <div class="container">
        <div class="header__boxes">
            <div class="header__texts">
                <div class="header__info ">
                    <h1 class="header__title">Spot Opole</h1>
                    <h3 class="header__description">
                    <?php echo $attributes['title']; ?>

                    </h3>
                </div>
                <div class="header__testimonials header__swiper">
                    <div class="header__swiper-wrapper swiper-wrapper">
                    <?php foreach( $attributes['review-box'] as $box ): ?>
                        <div class="header__testimonials-box swiper-slide">
                            <i class='bx bxs-quote-left'></i>
                            <div class="header__testimonials-texts">
                                <p class="header__testimonials-text">
                                <?php echo $box['text']; ?>
                                </p>
                                <p class="header__testimonials-author"> <?php echo $box['author']; ?></p>
                            </div>
                        </div>
                        
                        <?php endforeach; ?>
                    </div>

                </div>
                <a href="tel:+48665200525" class="header__btn">Zamów</a>
            </div>
            <div class="header__photo">
            <?php if ( isset( $attributes['img']['url'] ) ) : ?>
                <img class="header__img" src="<?php echo esc_url( $attributes['img']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['img']['alt'] ); ?>"
                    <?php endif; ?>

            </div>
        </div>
    </div>


</header>