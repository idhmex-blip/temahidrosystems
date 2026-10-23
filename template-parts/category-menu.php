<?php
/**
 * Menú de categorías en texto (columna lateral; en celular se despliega).
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$cfg = hs_config();
?>
<nav class="hs-cats" aria-label="Categorías">
	<details open>
		<summary class="hs-cats-title">
			<span>Categorías</span>
			<?php if ( ! empty( $cfg['url_huerto'] ) ) : ?>
			<a class="hs-cat-huerto" href="<?php echo esc_url( $cfg['url_huerto'] ); ?>">Diseña tu huerto</a>
			<?php endif; ?>
		</summary>
		<ul>
			<?php
			foreach ( hs_category_menu() as $slug => $label ) {
				$term = get_term_by( 'slug', $slug, 'product_cat' );
				if ( ! $term || is_wp_error( $term ) ) {
					continue;
				}
				$link = get_term_link( $term );
				if ( is_wp_error( $link ) ) {
					continue;
				}
				$current = ( function_exists( 'is_product_category' ) && is_product_category( $slug ) ) ? ' aria-current="page"' : '';
				printf(
					'<li><a class="hs-cat" href="%1$s"%2$s>%3$s</a></li>',
					esc_url( $link ),
					$current, // phpcs:ignore WordPress.Security.EscapeOutput
					esc_html( $label )
				);
			}
			?>
			<li class="hs-cats-sep" aria-hidden="true"></li>
			<li><a class="hs-cat hs-cat-accent" href="<?php echo esc_url( hs_url( $cfg['url_cursos'] ) ); ?>">Cursos y guías gratis</a></li>
			<li><a class="hs-cat hs-cat-accent" href="<?php echo esc_url( hs_url( $cfg['url_distribuidor'] ) ); ?>">Quiero ser distribuidor</a></li>
		</ul>
	</details>
	<?php echo hs_promos_html( 'hs-promos' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
</nav>
