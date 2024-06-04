<section class="events section-black">
    <div class="container">
        <h2 class="section-title">Minione wydarzenia</h2>

        <div class="events__boxes">
        <?php foreach( $attributes['box'] as $box ): ?>
            <div class="events__box events__box-<?php echo $box['class']; ?>">
                <div class="events__box-texts">
                    <h4 class="events__box-title"><?php echo $box['title']; ?></h4>
                    <p class="events__box-description"><?php echo $box['date']; ?></p>
                </div>
                <div class="events__box-socials">
                    <a href="<?php echo esc_url( $box['instagram'] ); ?>" class="events__box-social">
                        <i class='bx bxl-instagram-alt'></i>
                    </a>
                    <a href="<?php echo esc_url( $box['facebook'] ); ?>" class="events__box-social">
                        <i class='bx bxl-facebook-circle' ></i>
                    </a>
                </div>
                <?php if ( isset( $box['img']['url'] ) ) : ?>
                <img src="<?php echo esc_url( $box['img']['url'] ); ?>" alt="<?php echo esc_attr( $box['img']['alt'] ); ?>" class="events__box-img">
                <?php endif; ?>


            </div>
            <?php endforeach; ?>


            
          
       
    </div>
		 <a href="/" class="events__btn">powrót</a>
</section>