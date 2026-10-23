<?php
/**
 * Pie de página de Hidrosystems (reemplaza el de Astra).
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$cfg = hs_config();
?>
<?php if ( is_front_page() ) : ?>
	</main>
<?php else : ?>
		</div><!-- .ast-container -->
	</div><!-- #content -->
<?php endif; ?>
</div><!-- #page -->

<footer class="hs-footer">
	<div class="hs-footer-inner">
		<div class="hs-footer-brand">
			<div class="hs-footer-name">Hidrosystems</div>
			<p>
				<?php echo esc_html( $cfg['company'] ); ?><br>
				<?php echo esc_html( $cfg['address'] ); ?>
			</p>
			<?php if ( $cfg['phone'] || $cfg['email'] ) : ?>
			<p><?php echo esc_html( trim( $cfg['phone'] . ' ' . ( $cfg['phone'] && $cfg['email'] ? '·' : '' ) . ' ' . $cfg['email'] ) ); ?></p>
			<?php endif; ?>
		</div>

		<div class="hs-footer-col">
			<div class="hs-footer-title">Enlaces rápidos</div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a>
			<?php if ( function_exists( 'wc_get_page_id' ) ) : ?>
			<a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>">Tienda</a>
			<?php endif; ?>
			<a href="<?php echo esc_url( hs_url( $cfg['url_contacto'] ) ); ?>">Contáctanos</a>
			<a href="<?php echo esc_url( hs_url( $cfg['url_distribuidor'] ) ); ?>">Quiero ser distribuidor</a>
		</div>

		<div class="hs-footer-col hs-footer-redes">
			<div class="hs-footer-title">Síguenos</div>
			<?php if ( $cfg['facebook'] ) : ?><a href="<?php echo esc_url( $cfg['facebook'] ); ?>" target="_blank" rel="noopener">Facebook</a><?php endif; ?>
			<?php if ( $cfg['instagram'] ) : ?><a href="<?php echo esc_url( $cfg['instagram'] ); ?>" target="_blank" rel="noopener">Instagram</a><?php endif; ?>
			<?php if ( $cfg['youtube'] ) : ?><a href="<?php echo esc_url( $cfg['youtube'] ); ?>" target="_blank" rel="noopener">YouTube</a><?php endif; ?>
			<?php if ( $cfg['tiktok'] ) : ?><a href="<?php echo esc_url( $cfg['tiktok'] ); ?>" target="_blank" rel="noopener">TikTok</a><?php endif; ?>
		</div>
	</div>
	<div class="hs-footer-social" aria-label="Redes sociales">
		<?php
		$redes = array(
			'facebook'  => array( 'Facebook', '<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>' ),
			'youtube'   => array( 'YouTube', '<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2C0 8.1 0 12 0 12s0 3.9.5 5.8a3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1c.5-1.9.5-5.8.5-5.8s0-3.9-.5-5.8zM9.6 15.6V8.4l6.2 3.6-6.2 3.6z"/></svg>' ),
			'tiktok'    => array( 'TikTok', '<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>' ),
			'instagram' => array( 'Instagram', '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.3" cy="6.7" r="1.2" fill="currentColor" stroke="none"/></svg>' ),
		);
		foreach ( $redes as $k => $r ) {
			if ( ! empty( $cfg[ $k ] ) ) {
				printf( '<a href="%1$s" target="_blank" rel="noopener" aria-label="%2$s">%3$s</a>', esc_url( $cfg[ $k ] ), esc_attr( $r[0] ), $r[1] ); // phpcs:ignore WordPress.Security.EscapeOutput
			}
		}
		?>
	</div>
	<div class="hs-footer-ssl">
		<img src="<?php echo esc_url( content_url( '/uploads/2024/07/PositiveSSL_SectigoTag_300dpi-300x56.png' ) ); ?>" alt="Compras 100% seguras con certificado PositiveSSL" loading="lazy" width="150" height="28">
	</div>
	<div class="hs-footer-bottom">
		<div>© <?php echo esc_html( gmdate( 'Y' ) ); ?> Hidrosystems. Todos los derechos reservados.</div>
		<div class="hs-footer-legal">
			<a href="<?php echo esc_url( hs_url( $cfg['url_privacidad'] ) ); ?>">Aviso de privacidad</a>
			<?php if ( ! empty( $cfg['url_terminos'] ) ) : ?>
			<a href="<?php echo esc_url( hs_url( $cfg['url_terminos'] ) ); ?>">Términos y condiciones</a>
			<?php endif; ?>
		</div>
	</div>
</footer>

<?php // El botón flotante de WhatsApp lo pone el plugin Click to Chat. ?>

<?php wp_footer(); ?>
</body>
</html>
