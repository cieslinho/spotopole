<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<nav class="nav">

<div class="nav__mobile">
	<div class="nav__overlay"></div>

	<a href="/" class="nav__brand">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-kolor.png"
			alt="Spot Opole, Beach Bar Spot Opole" class="nav__logo">
	</a>

	<div class="nav__navbar">

		<div class="nav__links">
		   
			<a target="_blank" href="<?php echo get_template_directory_uri(); ?>/assets/files/menu-2024-v2.pdf" class="nav__link">menu</a>
			<a href="#polecane" class="nav__link">polecane</a>
			<a href="#galeria" class="nav__link">galeria</a>
		  
			<a href="#kontakt" class="nav__link">kontakt</a>
			<a href="tel:+48665200525" class="nav__link nav__order">
				<i class='bx bxs-phone'></i>
				zamów
			</a>

			<div class="nav__socials">
				<a class="nav__social" href="https://www.facebook.com/SpotOpole">
					<i class='bx bxl-facebook-circle'></i>
				</a>
				<a class="nav__social" href="https://www.instagram.com/spot_opole/">
					<i class='bx bxl-instagram-alt'></i>
				</a>
			</div>
		</div>


	</div>
	<button class="nav__btn">
		<div class="nav__btn-box">
			<div class="nav__btn-bars"></div>
		</div>
	</button>
</div>

<div class="nav__desktop">
	<div class="nav__desktop-socials">
		<a class="nav__desktop-social" href="https://www.facebook.com/SpotOpole">
			<i class='bx bxl-facebook-circle'></i>
		</a>
		<a class="nav__desktop-social" href="https://www.instagram.com/spot_opole/">
			<i class='bx bxl-instagram-alt'></i>
		</a>
	</div>
	<div class="nav__desktop-links">
		
		<a target="_blank" href="<?php echo get_template_directory_uri(); ?>/assets/files/menu-2024-v2.pdf"  class="nav__desktop-link">menu</a>
		<a href="#polecane" class="nav__desktop-link">polecane</a>
		<a href="/" class="nav__desktop-brand">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-kolor.png"
				alt="Spot Opole, Beach Bar Spot Opole" class="nav__desktop-logo">
		</a>
		<a href="#galeria" class="nav__desktop-link">galeria</a>
		
		<a href="#kontakt" class="nav__desktop-link">kontakt</a>
	</div>
	<div class="nav__desktop-right">
		<a href="tel:+48665200525" class="nav__desktop-link nav__desktop-order">
			<i class='bx bxs-phone'></i>
			zamów
		</a>
	</div>

</div>


</nav>


	<?php
	
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>


		<section class="tabs">
<div class="container">
  <h2 class="section-title-new">Informacje o produkcie</h2>
  
  <button id="info" class="tabs__btn">Opis</button>
  <div class="tabs__content tabs__content-descrpition">
    <p class="tabs__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam fugit corrupti est dignissimos esse dolore, officiis modi. In unde pariatur magni iste fugit vitae at perferendis modi sapiente ipsam consequatur eaque aliquid assumenda, blanditiis veniam reprehenderit corporis nihil quo hic eligendi architecto soluta commodi ut laborum. Iure fuga doloremque illum.</p>
  </div>
  <button id="price" class="tabs__btn">Cena</button>
  <div class="tabs__content tabs__content-price">
    <p class="tabs__price tabs__price-first"><span class="tabs__poll">Pula 1:</span> 50 zł <span class="tabs__date">do 17/06/2024</span></p>
    <p class="tabs__price tabs__price-second"><span class="tabs__poll">Pula 2:</span> 80 zł <span class="tabs__date">od 18/06/2024 do 01/07/2024</span></p>
    <p class="tabs__price tabs__price-third"><span class="tabs__poll">Pula 3:</span> 100 zł <span class="tabs__date">od 02/07/2024 do 26/07/2024</span></p>
  </div>
  <button id="place" class="tabs__btn">Spotify</button>
  <div class="tabs__content tabs__content-location">
  <iframe class="tabs__iframe" style="border-radius:12px" src="https://open.spotify.com/embed/artist/7kaEEK2cQh07aEfEEBd4Hn?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
  </div>
</div>
</section>
<?php echo do_shortcode('[related_products limit="3"]')?>
		
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
		
	?>

	

<?php

get_footer( 'shop' );


/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
