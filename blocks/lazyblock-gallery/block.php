<section class="gallery section-black" id="galeria">
    <div class="container">
        <h2 class="section-title section-title-reverse">Galeria</h2>

    </div>

    <div class="gallery__swiper swiper">
        <div class="gallery__boxes swiper-wrapper">
        <?php foreach( $attributes['gallery'] as $box ): ?>
            <div class="gallery__box swiper-slide">
            <?php if ( isset( $box['img']['url'] ) ) : ?>
                <img class="gallery__box-img swiper-slide"  src="<?php echo esc_url( $box['img']['url'] ); ?>" alt="<?php echo esc_attr( $box['img']['alt'] ); ?>">

                <?php endif; ?>


            </div>
            <?php endforeach; ?>




        </div>
        <div class="gallery__next swiper-button-next"></div>
        <div class="gallery__prev swiper-button-prev"></div>
    </div>

</section>