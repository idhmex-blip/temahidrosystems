<?php
/**
 * Inicio de Hidrosystems.
 * Reemplaza la portada hecha con Elementor (esa página sigue guardada, sin tocar).
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();

$cfg      = hs_config();
$slides   = hs_hero_slides( $cfg['hero_imagenes'] );
$ids_vend = hs_ids_desde_enlaces( $cfg['mas_vendidos'] );
$ids_nov  = hs_ids_desde_enlaces( $cfg['novedades'] );
$shop_url = function_exists( 'wc_get_page_id' ) ? get_permalink( wc_get_page_id( 'shop' ) ) : home_url( '/' );
$hero_img = get_stylesheet_directory() . '/assets/hero.jpg';
$has_hero = file_exists( $hero_img );
$banners  = hs_banners( $cfg['banners'], $shop_url );
?>

<div class="hs-home">

	<?php get_template_part( 'template-parts/category-menu' ); ?>

	<div class="hs-home-main">

		<?php if ( $banners ) : ?>
		<div class="hs-banner-wrap" data-seg="<?php echo (int) max( 2, (int) $cfg['hero_segundos'] ); ?>" aria-roledescription="carrusel">
		<section class="hs-banner">
			<h1 class="screen-reader-text">Hidroponía y huertos en México</h1>
			<?php foreach ( $banners as $i => $b ) : ?>
			<a class="hs-banner-slide<?php echo 0 === $i ? ' is-active' : ''; ?>" href="<?php echo esc_url( $b['url'] ); ?>"<?php echo 0 === $i ? '' : ' tabindex="-1"'; ?>>
				<img src="<?php echo esc_url( $b['src'] ); ?>" alt="<?php echo esc_attr( $b['alt'] ); ?>" <?php echo 0 === $i ? 'fetchpriority="high"' : 'loading="eager"'; ?>>
			</a>
			<?php endforeach; ?>
		</section>
			<?php if ( count( $banners ) > 1 ) : ?>
			<div class="hs-banner-dots">
				<?php foreach ( $banners as $i => $b ) : ?>
				<button type="button" class="hs-banner-dot<?php echo 0 === $i ? ' is-active' : ''; ?>" aria-label="Banner <?php echo (int) ( $i + 1 ); ?>"></button>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
		</div>
		<?php else : ?>
		<section class="hs-hero<?php echo $slides ? ' has-slides' : ''; ?>" data-seg="<?php echo (int) max( 2, (int) $cfg['hero_segundos'] ); ?>">
			<?php if ( $slides ) : ?>
			<div class="hs-hero-slides" aria-hidden="true">
				<?php foreach ( $slides as $i => $url ) : ?>
				<div class="hs-hero-slide<?php echo 0 === $i ? ' is-active' : ''; ?>" style="background-image:url('<?php echo esc_url( $url ); ?>')"></div>
				<?php endforeach; ?>
			</div>
			<?php if ( count( $slides ) > 1 ) : ?>
			<div class="hs-hero-dots">
				<?php foreach ( $slides as $i => $url ) : ?>
				<button type="button" class="hs-hero-dot<?php echo 0 === $i ? ' is-active' : ''; ?>" aria-label="Imagen <?php echo (int) ( $i + 1 ); ?>"></button>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
			<?php endif; ?>
			<div class="hs-hero-text">
				<div class="hs-eyebrow">Tienda en línea</div>
				<h1>Hidroponía y huertos en México</h1>
				<p>Sistemas de hidroponía, riego, semillas y sustratos para cultivar en casa o a escala comercial.</p>
				<div class="hs-hero-actions">
					<a class="hs-btn hs-btn-lime" href="<?php echo $ids_vend ? '#mas-vendidos' : esc_url( $shop_url ); ?>"><?php echo $ids_vend ? 'Ver más vendidos' : 'Ver la tienda'; ?></a>
					<?php $url_cot = ! empty( $cfg['url_cotizar'] ) ? $cfg['url_cotizar'] : $cfg['whatsapp']; if ( $url_cot ) : ?>
					<a class="hs-btn hs-btn-ghost" href="<?php echo esc_url( $url_cot ); ?>" target="_blank" rel="noopener">Solicitar una cotización</a>
					<?php endif; ?>
				</div>
			</div>
			<?php if ( $has_hero && ! $slides ) : ?>
			<div class="hs-hero-img">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/hero.jpg' ); ?>" alt="" loading="eager">
			</div>
			<?php endif; ?>
		</section>

		<?php endif; ?>

		<?php if ( $ids_vend ) : ?>
		<section id="mas-vendidos" class="hs-section">
			<div class="hs-section-head">
				<h2>Más vendidos</h2>
				<a href="<?php echo esc_url( $shop_url ); ?>">Ver toda la tienda →</a>
			</div>
			<?php echo do_shortcode( '[products ids="' . esc_attr( $ids_vend ) . '" orderby="post__in" columns="4"]' ); ?>
		</section>
		<?php endif; ?>

		<section class="hs-section">
			<h2>Lo que más buscan</h2>
			<div class="hs-featured">
				<?php
				foreach ( hs_featured_categories() as $slug => $info ) {
					$desc = $info['desc'];
					$term = get_term_by( 'slug', $slug, 'product_cat' );
					if ( ! $term || is_wp_error( $term ) ) {
						continue;
					}
					$link   = get_term_link( $term );
					$labels = hs_category_menu();
					$label  = isset( $labels[ $slug ] ) ? $labels[ $slug ] : $term->name;
					$thumb  = (int) get_term_meta( $term->term_id, 'thumbnail_id', true );
					?>
					<a class="hs-feature" href="<?php echo esc_url( $link ); ?>">
						<div class="hs-feature-img">
							<?php
							if ( $thumb ) {
								echo wp_get_attachment_image( $thumb, 'medium_large', false, array( 'alt' => '', 'loading' => 'lazy' ) );
							} elseif ( ! empty( $info['img'] ) ) {
								// foto de tu portada actual
								printf( '<img src="%s" alt="%s" loading="lazy">', esc_url( 0 === strpos( $info['img'], 'theme:' ) ? get_stylesheet_directory_uri() . '/assets/' . substr( $info['img'], 6 ) : content_url( '/uploads/' . $info['img'] ) ), esc_attr( $label ) );
							}
							?>
						</div>
						<div class="hs-feature-body">
							<div class="hs-feature-title"><?php echo esc_html( $label ); ?></div>
							<div class="hs-feature-desc"><?php echo esc_html( $desc ); ?></div>
							<div class="hs-feature-link">Ver productos →</div>
						</div>
					</a>
					<?php
				}
				?>
			</div>
		</section>

		<section class="hs-section">
			<div class="hs-section-head">
				<h2>Novedades</h2>
				<a href="<?php echo esc_url( $shop_url ); ?>">Ver todas →</a>
			</div>
			<?php
			if ( $ids_nov ) {
				echo do_shortcode( '[products ids="' . esc_attr( $ids_nov ) . '" orderby="post__in" columns="4"]' );
			} else {
				echo do_shortcode( '[products orderby="date" order="DESC" limit="4" columns="4"]' );
			}
			?>
		</section>

		<?php echo hs_promos_html( 'hs-promos-m' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

		<?php if ( ! empty( $cfg['video_inicio'] ) && preg_match( '/^[A-Za-z0-9_-]{6,20}$/', $cfg['video_inicio'] ) ) : ?>
		<section class="hs-video">
			<div class="hs-video-marco">
				<iframe id="hs-video-yt" src="https://www.youtube-nocookie.com/embed/<?php echo esc_attr( $cfg['video_inicio'] ); ?>?rel=0&amp;autoplay=1&amp;mute=1&amp;enablejsapi=1&amp;playsinline=1&amp;loop=1&amp;playlist=<?php echo esc_attr( $cfg['video_inicio'] ); ?>" title="Video de Hidrosystems" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				<button type="button" class="hs-video-sonido" id="hs-video-sonido" aria-label="Activar el sonido del video">🔊 Activar sonido</button>
			</div>
		</section>
		<?php else : ?>
		<section class="hs-band">
			<div>
				<h2>Cursos y guías gratis</h2>
				<p>Aprende hidroponía, forraje verde hidropónico y huertos con nuestros cursos en línea y guías de cultivo.</p>
			</div>
			<a class="hs-btn hs-btn-dark" href="<?php echo esc_url( hs_url( $cfg['url_cursos'] ) ); ?>">Ver cursos y guías</a>
		</section>
		<?php endif; ?>

		<?php if ( is_array( $cfg['trust'] ) && count( $cfg['trust'] ) >= 2 ) : ?>
		<section class="hs-trust">
			<?php foreach ( $cfg['trust'] as $item ) : ?>
			<div class="hs-trust-item">
				<div class="hs-trust-title"><?php echo esc_html( $item['title'] ); ?></div>
				<?php if ( ! empty( $item['text'] ) ) : ?>
				<div class="hs-trust-text"><?php echo esc_html( $item['text'] ); ?></div>
				<?php endif; ?>
			</div>
			<?php endforeach; ?>
		</section>
		<?php endif; ?>

	</div>
</div>

<?php
get_footer();
