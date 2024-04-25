<section class="home">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-kolor.png" alt="Spot Opole, Beach Bar Spot Opole" class="home__logo">
<div class="home__boxes">
    <div class="home__box">
    <?php if ( isset( $attributes['img-left']['url'] ) ) : ?>
        <img class="home__box-img" src="<?php echo esc_url( $attributes['img-left']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['img-left']['alt'] ); ?>">
        <a href="/restauracja" class="home__link">  <?php echo $attributes['text-left']; ?></a>
        <?php endif; ?>
    </div>
    <div class="home__box">
    <?php if ( isset( $attributes['img-right']['url'] ) ) : ?>
        <img class="home__box-img" src="<?php echo esc_url( $attributes['img-right']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['img-right']['alt'] ); ?>">
        <a href="/wydarzenia" class="home__link">  <?php echo $attributes['text-right']; ?>
</a>
        <?php endif; ?>
    </div>
</div>
</section>