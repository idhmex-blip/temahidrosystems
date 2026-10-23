<?php
/**
 * Encabezado de Hidrosystems (reemplaza el de Astra).
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$cfg = hs_config();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="hs-skip" href="#content">Ir al contenido</a>

<?php if ( $cfg['promo'] || $cfg['phone'] ) : ?>
<div class="hs-topbar">
	<div><?php echo esc_html( $cfg['promo'] ); ?></div>
	<div><?php echo $cfg['phone'] ? 'Tel. ' . esc_html( $cfg['phone'] ) : ''; ?></div>
</div>
<?php endif; ?>

<header class="hs-header">
	<a class="hs-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo( 'name' ); ?>">
		<?php if ( has_custom_logo() ) : ?>
			<?php echo wp_get_attachment_image( (int) get_theme_mod( 'custom_logo' ), 'medium', false, array( 'class' => 'custom-logo', 'alt' => get_bloginfo( 'name' ) ) ); ?>
		<?php else : ?>
			<span class="hs-logo-mark"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3c3.5 4.2 6 7.2 6 10.2A6 6 0 0 1 6 13.2C6 10.2 8.5 7.2 12 3z"/></svg></span>
			<span class="hs-logo-text">Hidrosystems</span>
		<?php endif; ?>
	</a>

	<form class="hs-search" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label class="screen-reader-text" for="hs-q">Buscar productos</label>
		<input id="hs-q" type="search" name="s" placeholder="Buscar productos" value="<?php echo esc_attr( get_search_query() ); ?>">
		<input type="hidden" name="post_type" value="product">
		<button type="submit" aria-label="Buscar"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-3.5-3.5"/></svg></button>
	</form>

	<button class="hs-burger" type="button" aria-label="Menú" aria-expanded="false" aria-controls="hs-mnav"><span></span><span></span><span></span></button>

	<div class="hs-header-actions">
		<?php // Un solo botón (escritorio y celular): lleva al formulario de cotización de QUOEXPRESS (url_cotizar en functions.php). ?>
		<?php $url_cot = ! empty( $cfg['url_cotizar'] ) ? $cfg['url_cotizar'] : $cfg['whatsapp']; ?>
		<?php if ( $url_cot ) : ?>
		<a class="hs-btn hs-btn-outline" href="<?php echo esc_url( $url_cot ); ?>" target="_blank" rel="noopener">
			<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8z"/><path d="M14 3v5h5M9 13h6M9 17h6"/></svg>
			<span>Solicitar una cotización</span>
		</a>
		<?php endif; ?>
		<?php hs_cart_link(); ?>
	</div>
</header>

<nav class="hs-mnav" id="hs-mnav" aria-label="Menú del celular" hidden>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a>
	<?php if ( function_exists( 'wc_get_page_id' ) ) : ?>
	<a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>">Categorías</a>
	<?php endif; ?>
	<?php if ( function_exists( 'wc_get_cart_url' ) ) : ?>
	<a href="<?php echo esc_url( wc_get_cart_url() ); ?>">Carrito</a>
	<?php endif; ?>
	<?php if ( ! empty( $cfg['url_huerto'] ) ) : ?>
	<a class="hs-nav-huerto" href="<?php echo esc_url( $cfg['url_huerto'] ); ?>">🌱 Diseña tu huerto</a>
	<?php endif; ?>
	<a href="<?php echo esc_url( hs_url( $cfg['url_noticias'] ) ); ?>">Noticias</a>
	<a href="<?php echo esc_url( hs_url( $cfg['url_contacto'] ) ); ?>">Contáctanos</a>
	<a href="<?php echo esc_url( hs_url( $cfg['url_nosotros'] ) ); ?>">Sobre nosotros</a>
	<a href="<?php echo esc_url( hs_url( $cfg['url_distribuidor'] ) ); ?>">Quiero ser distribuidor</a>
</nav>

<nav class="hs-nav" aria-label="Principal">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a>
	<?php if ( function_exists( 'wc_get_page_id' ) ) : ?>
	<a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>">Tienda</a>
	<?php endif; ?>
	<?php if ( ! empty( $cfg['url_huerto'] ) ) : ?>
	<a class="hs-nav-huerto" href="<?php echo esc_url( $cfg['url_huerto'] ); ?>">🌱 Diseña tu huerto</a>
	<?php endif; ?>
	<a href="<?php echo esc_url( hs_url( $cfg['url_cursos'] ) ); ?>">Cursos y guías gratis</a>
	<a href="<?php echo esc_url( hs_url( $cfg['url_contacto'] ) ); ?>">Contáctanos</a>
	<a href="<?php echo esc_url( hs_url( $cfg['url_distribuidor'] ) ); ?>">Quiero ser distribuidor</a>
	<div class="hs-nav-social">
		<?php if ( $cfg['facebook'] ) : ?>
		<a href="<?php echo esc_url( $cfg['facebook'] ); ?>" target="_blank" rel="noopener" aria-label="Facebook"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
		<?php endif; ?>
		<?php if ( $cfg['instagram'] ) : ?>
		<a href="<?php echo esc_url( $cfg['instagram'] ); ?>" target="_blank" rel="noopener" aria-label="Instagram"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.3" cy="6.7" r="1.2" fill="currentColor" stroke="none"/></svg></a>
		<?php endif; ?>
		<?php if ( $cfg['tiktok'] ) : ?>
		<a href="<?php echo esc_url( $cfg['tiktok'] ); ?>" target="_blank" rel="noopener" aria-label="TikTok"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg></a>
		<?php endif; ?>
		<?php if ( $cfg['youtube'] ) : ?>
		<a href="<?php echo esc_url( $cfg['youtube'] ); ?>" target="_blank" rel="noopener" aria-label="YouTube"><svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2C0 8.1 0 12 0 12s0 3.9.5 5.8a3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1c.5-1.9.5-5.8.5-5.8s0-3.9-.5-5.8zM9.6 15.6V8.4l6.2 3.6-6.2 3.6z"/></svg></a>
		<?php endif; ?>
	</div>
</nav>

<div id="page" class="hfeed site">
<?php if ( is_front_page() ) : ?>
	<main id="content" class="hs-front">
<?php else : ?>
	<div id="content" class="site-content">
		<div class="ast-container">
<?php endif; ?>
