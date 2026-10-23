<?php
/**
 * Hidrosystems - tema hijo de Astra.
 * Aquí se cambian los datos de contacto y el orden de las categorías.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Ajustes editables. Lo que dejes vacío ('') simplemente no se muestra.
 */
function hs_config() {
	return array(
		// Barra verde de arriba (ej. "Envíos a todo México").
		'promo'     => '',
		'phone'     => '',
		'email'     => '',
		'whatsapp'  => 'https://wa.me/message/Q3EQTEGD2VL6M1',
		'company'   => 'Hidrosistemas y Soluciones Tecnológicas S.A.S. de C.V.',
		'address'   => '57A 951, Col. Las Américas, Mérida, Yuc. CP 97302',
		'facebook'  => 'https://www.facebook.com/hidrosystemsmexico',
		'instagram' => 'https://www.instagram.com/hidrosystems/',
		'youtube'   => 'https://www.youtube.com/channel/UCf9odFJDOPsygGqYhIWSLFw',
		'tiktok'    => 'https://www.tiktok.com/@hidrosystemsmx',

		// Páginas existentes en tu sitio.
		'url_contacto'     => '/contact-us/',
		'url_distribuidor' => '/quiero-ser-distribuidor-2/',
		'url_privacidad'   => '/aviso-de-privacidad/',
		// Página de Términos y condiciones (ej. '/terminos-y-condiciones/'). Vacío = no se muestra el enlace en el pie.
		'url_terminos'     => '/terminos-y-condiciones/',
		'url_noticias'     => '/blog/',
		// Enlace de tu cotizador QUOEXPRESS (botón COTIZAR de cada producto). Si está vacío, el botón lleva a tu WhatsApp.
		'url_cotizar'      => 'https://quoexpress.com/n/hidrosystems',
		// Dirección de la app DISEÑA TU HUERTO (botón verde bajo el carrusel del inicio). Vacío = el botón no se muestra.
		'url_huerto'       => 'https://huerto.hidrosystems.org/?utm_source=tienda&utm_medium=boton-inicio',
		'url_nosotros'     => '/about-us/',
		'url_cursos'       => '/cursoshot/',
		// Video de YouTube del inicio (solo el código: en youtu.be/jsIaz5NW9WY es jsIaz5NW9WY). Vacío = recuadro de cursos.
		'video_inicio'     => 'jsIaz5NW9WY',
		'url_guias'        => '/cursohidroponia',

		// BANNERS del inicio (carrusel que cambia solo cada 'hero_segundos'). Sustituyen al recuadro verde.
		// 'img': archivo dentro de assets/banners/ de este tema (o la dirección completa de una imagen).
		// 'url': a dónde lleva al tocarlo ('' = a la tienda; o una ruta como '/product-category/semillas/'). 'alt': descripción para buscadores y lectores de pantalla.
		// Para quitar un banner, borra su bloque; si no hay ninguno, vuelve el recuadro verde.
		'banners' => array(
			array( 'img' => 'banner-1.jpg', 'url' => '', 'alt' => 'Agricultura urbana: todo para cultivar en casa' ),
			array( 'img' => 'banner-2.jpg', 'url' => '/product-category/hidroponia/', 'alt' => 'Hidroponía: sistemas y torres' ),
			array( 'img' => 'banner-3.jpg', 'url' => '/product-category/camasdecultivo/', 'alt' => 'Huertos ecológicos: cultiva tu huerto en casa' ),
			array( 'img' => 'banner-4.jpg', 'url' => '', 'alt' => 'Cultiva tu propio alimento, desde germinados hasta huertos' ),
			array( 'img' => 'banner-5.jpg', 'url' => '/product-category/fvh/', 'alt' => 'Forraje verde hidropónico: alimenta tu ganado' ),
			array( 'img' => 'banner-6.jpg', 'url' => '/product-category/germinados/', 'alt' => 'Kits de producción de germinados: superalimentos altamente nutritivos' ),
			array( 'img' => 'banner-7.jpg', 'url' => '', 'alt' => 'Las mejores ofertas: tarjetas hasta 6 meses sin intereses y medios de pago' ),
			array( 'img' => 'banner-8.jpg', 'url' => '/product-category/riego-por-nebulizacion/', 'alt' => 'Sistemas de nebulización y enfriamiento para invernaderos, terrazas o zonas industriales' ),
			array( 'img' => 'banner-9.jpg', 'url' => '/product-category/riego-residencial/', 'alt' => 'Riego residencial: riega eficientemente' ),
			array( 'img' => 'banner-10.jpg', 'url' => '', 'alt' => 'Composteras: adquiere la tuya' ),
			array( 'img' => 'banner-11.jpg', 'url' => '/product-category/sustratos/', 'alt' => 'Sustratos premium: fibra de coco, peat moss, perlita y vermiculita' ),
			array( 'img' => 'banner-12.jpg', 'url' => '/product-category/riego-para-cultivos/', 'alt' => 'Sistemas de riego diversos: válvulas, goteros, mangueras y temporizadores' ),
		),

		// Fondo del recuadro verde (solo si no hay banners): cambia solo cada 5 segundos.
		// Pon fotos de tu carpeta de medios (ej. '2024/12/5-1.jpg') o la dirección completa de una imagen.
		// Si lo dejas vacío, el recuadro queda verde liso.
		'hero_imagenes'   => array(),
		'hero_segundos'   => 2,

		// Productos del inicio, por enlace. Pega aquí la dirección completa de cada producto, uno por línea.
		// "Más vendidos": si lo dejas vacío, esa sección no se muestra.
		'mas_vendidos' => array(
			'https://hidrosystems.org/product/torre-de-cultivo-aeroponia-para-hortalizas-18-pots/',
			'https://hidrosystems.org/product/sistema-hidroponico-tipo-nft-para-hortalizas-36-canastillas-copia-2/',
			'https://hidrosystems.org/product/sistema-hidroponico-54-plantas-con-6-charolas-para-germinado/',
			'https://hidrosystems.org/product/torre-de-cultivo-aeroponia-para-hortalizas-36-pots/',
			'https://hidrosystems.org/product/kit-de-produccion-de-forraje-verde-hidroponico-para-6-kilos-al-dia-con-6-charolas-riego-automatico/',
			'https://hidrosystems.org/product/kit-de-produccion-forraje-verde-hidroponico-con-12-charolas-y-riego-automatico/',
			'https://hidrosystems.org/product/kit-de-produccion-fvh-para-24-kilos-al-dia-con-24-charolas-y-riego-automatico/',
			'https://hidrosystems.org/product/sistema-de-produccion-de-50-kg-al-dia-de-fvh-con-48-charolas-2/',
			'https://hidrosystems.org/product/cama-de-cultivo-para-huerto-de-60x120x20-cms/',
			'https://hidrosystems.org/product/cama-de-cultivo-kit-basico-para-huerto-de-90x120x20-cms/',
			'https://hidrosystems.org/product/mesa-de-cultivo-para-huerto-de-60x120x20-cm/',
			'https://hidrosystems.org/product/mesa-de-cultivo-kit-completo-para-huerto-de-60x120x20-cm/',
			'https://hidrosystems.org/product/kit-de-riego-oculto-para-jardin-hasta-75-m2-3-aspersores/',
			'https://hidrosystems.org/product/kit-de-riego-oculto-para-jardin-de-25-a-75-m2-de-3-aspersores/',
			'https://hidrosystems.org/product/kit-de-riego-oculto-para-jardin-75-150-m2-6-aspersores/',
			'https://hidrosystems.org/product/kit-de-riego-oculto-para-jardin-250-a-300-m2-con-12-aspersores/',
		),
		// "Novedades": los que pongas aquí. Si lo dejas vacío, se muestran los 4 productos más recientes.
		'novedades'    => array(
			'https://hidrosystems.org/product/set-de-3-torres-de-cultivo-aeroponia-para-hortalizas-54-pots-kit-basico/',
			'https://hidrosystems.org/product/compostera-para-huertos-y-jardines-con-capacidad-de-300-litros/',
			'https://hidrosystems.org/product/sistema-de-produccion-de-50-kg-al-dia-de-fvh-completo-con-48-charolas-kit-bomba-solar/',
			'https://hidrosystems.org/product/kit-de-2-charolas-para-germinados-6-variedades-de-semillas/',
		),

		// Franja de confianza del inicio. Se muestra solo si hay 2 o más.
		// Ejemplo: array( 'title' => 'Envíos', 'text' => 'A todo México' )
		'trust'     => array(),
	);
}

/**
 * Categorías del menú lateral, en este orden.
 * 'slug de la categoría' => 'texto que se muestra'
 */
function hs_category_menu() {
	return array(
		'hidroponia'                      => 'Hidroponía',
		'fvh'                             => 'Forraje verde hidropónico',
		'germinados'                      => 'Germinados',
		'camasdecultivo'                  => 'Huertos ecológicos',
		'riego-residencial'               => 'Riego residencial',
		'riego-para-cultivos-de-goteo'    => 'Riego para cultivos de goteo y aspersión',
		'riego-para-cultivos'             => 'Riego para diversos',
		'riego-por-nebulizacion'          => 'Nebulización',
		'semillas'                        => 'Semillas',
		'sustratos'                       => 'Sustratos para plantas',
		'accesorios-para-jardin'          => 'Accesorios para jardín',
	);
}

/**
 * Tres accesos grandes del inicio: slug => descripción corta y foto.
 * La foto es la de tu portada actual (carpeta uploads). Si la categoría ya tiene imagen propia en WooCommerce, se usa esa.
 */
function hs_featured_categories() {
	return array(
		'hidroponia'     => array( 'desc' => 'Sistemas y equipos para cultivar sin tierra.', 'img' => '2024/12/5-1.jpg' ),
		'fvh'            => array( 'desc' => 'Equipos para producir forraje para tu ganado.', 'img' => '2022/11/31.jpg' ),
		'camasdecultivo' => array( 'desc' => 'Camas y mesas de cultivo para casa y negocio.', 'img' => '2024/12/1-3.jpg' ),
		'germinados'        => array( 'desc' => 'Kits para germinar superalimentos en casa.', 'img' => 'theme:categorias/germinados.webp' ),
		'riego-residencial' => array( 'desc' => 'Riega tu jardín de forma eficiente.', 'img' => '' ),
		'riego-por-nebulizacion' => array( 'desc' => 'Refresca tus espacios en calores intensos.', 'img' => 'theme:categorias/nebulizacion.webp' ),
	);
}

/**
 * Convierte enlaces de producto (https://sitio/product/mi-producto/) en los números de producto que usa WooCommerce.
 * Respeta el orden en que los pusiste y salta los enlaces que no encuentra.
 */
function hs_ids_desde_enlaces( $enlaces ) {
	$ids = array();
	foreach ( (array) $enlaces as $enlace ) {
		$enlace = trim( (string) $enlace );
		if ( '' === $enlace ) {
			continue;
		}
		if ( ctype_digit( $enlace ) ) {
			$ids[] = (int) $enlace;
			continue;
		}
		$ruta = trim( (string) wp_parse_url( $enlace, PHP_URL_PATH ), '/' );
		$slug = basename( $ruta );
		$post = $slug ? get_page_by_path( $slug, OBJECT, 'product' ) : null;
		if ( $post ) {
			$ids[] = (int) $post->ID;
		}
	}
	return implode( ',', array_unique( $ids ) );
}

/** Direcciones completas de las imágenes del carrusel (acepta "2024/12/foto.jpg" o una dirección completa). */
function hs_hero_slides( $imagenes ) {
	$out = array();
	foreach ( (array) $imagenes as $img ) {
		$img = trim( (string) $img );
		if ( '' === $img ) {
			continue;
		}
		$out[] = preg_match( '#^https?://#i', $img ) ? $img : content_url( '/uploads/' . ltrim( $img, '/' ) );
	}
	return $out;
}

/** Banners del carrusel con su dirección completa. */
function hs_banners( $banners, $shop_url ) {
	$out = array();
	foreach ( (array) $banners as $b ) {
		if ( empty( $b['img'] ) ) {
			continue;
		}
		$img   = trim( (string) $b['img'] );
		$src   = preg_match( '#^https?://#i', $img ) ? $img : add_query_arg( 'v', (int) @filemtime( get_stylesheet_directory() . '/assets/banners/' . ltrim( $img, '/' ) ), get_stylesheet_directory_uri() . '/assets/banners/' . ltrim( $img, '/' ) );
		$url   = ! empty( $b['url'] ) ? ( preg_match( '#^https?://#i', $b['url'] ) ? $b['url'] : home_url( $b['url'] ) ) : $shop_url;
		$out[] = array( 'src' => $src, 'url' => $url, 'alt' => isset( $b['alt'] ) ? (string) $b['alt'] : '' );
	}
	return $out;
}

function hs_url( $path ) {
	return home_url( $path );
}

/**
 * Estilos y scripts.
 */
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'hs-font',
			'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
			array(),
			null
		);
		wp_enqueue_style(
			'hs-style',
			get_stylesheet_uri(),
			array( 'hs-font' ),
			filemtime( get_stylesheet_directory() . '/style.css' )
		);
		wp_enqueue_script(
			'hs-theme',
			get_stylesheet_directory_uri() . '/assets/theme.js',
			array(),
			filemtime( get_stylesheet_directory() . '/assets/theme.js' ),
			true
		);
	},
	20
);

add_filter(
	'body_class',
	function ( $classes ) {
		$classes[] = 'hs';
		return $classes;
	}
);

/**
 * Las páginas de tienda y categorías usan nuestro menú lateral,
 * así que quitamos la barra lateral de Astra en ellas.
 */
function hs_is_shop_listing() {
	return function_exists( 'is_shop' ) && ( is_shop() || is_product_taxonomy() );
}

add_filter(
	'astra_page_layout',
	function ( $layout ) {
		return hs_is_shop_listing() ? 'no-sidebar' : $layout;
	},
	20
);

add_action(
	'woocommerce_before_main_content',
	function () {
		if ( ! hs_is_shop_listing() ) {
			return;
		}
		echo '<div class="hs-shop">';
		get_template_part( 'template-parts/category-menu' );
		echo '<div class="hs-shop-main">';
	},
	1
);

add_action(
	'woocommerce_after_main_content',
	function () {
		if ( ! hs_is_shop_listing() ) {
			return;
		}
		echo '</div></div>';
	},
	99
);

/**
 * Enlace del carrito con total; se actualiza solo al agregar productos.
 */
function hs_cart_link() {
	if ( ! function_exists( 'WC' ) || ! WC()->cart ) {
		return;
	}
	printf(
		'<a class="hs-btn hs-btn-dark hs-cart" href="%1$s"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="20" r="1.5"/><circle cx="18" cy="20" r="1.5"/><path d="M2 3h3l2.6 12.2a1 1 0 0 0 1 .8h9.2a1 1 0 0 0 1-.8L21 7H6"/></svg><span class="hs-cart-t">Carrito · %2$s</span><span class="hs-cart-n">%3$d</span></a>',
		esc_url( wc_get_cart_url() ),
		wp_kses_post( WC()->cart->get_cart_subtotal() ),
		(int) WC()->cart->get_cart_contents_count()
	);
}

add_filter(
	'woocommerce_add_to_cart_fragments',
	function ( $fragments ) {
		ob_start();
		hs_cart_link();
		$fragments['a.hs-cart'] = ob_get_clean();
		return $fragments;
	}
);

/**
 * Página de producto: sin barra lateral y con botón de WhatsApp y avisos de confianza bajo "Añadir al carrito".
 */
add_filter(
	'astra_page_layout',
	function ( $layout ) {
		if ( function_exists( 'is_product' ) && ( is_product() || is_cart() || is_checkout() ) ) {
			return 'no-sidebar';
		}
		return $layout;
	},
	21
);

/** Enlace de WhatsApp: si es un enlace de mensaje (wa.me/message/…) se usa tal cual; si es un número, lleva el nombre del producto. */
function hs_wa_producto( $product ) {
	$cfg = hs_config();
	if ( ! empty( $cfg['url_cotizar'] ) ) {
		return $cfg['url_cotizar'];
	}
	$wa  = isset( $cfg['whatsapp'] ) ? trim( (string) $cfg['whatsapp'] ) : '';
	if ( '' === $wa ) {
		return '';
	}
	if ( false !== strpos( $wa, '/message/' ) ) {
		return $wa;
	}
	return add_query_arg( 'text', rawurlencode( 'Hola, me interesa: ' . $product->get_name() . ' ' . get_permalink( $product->get_id() ) ), $wa );
}

add_action(
	'woocommerce_single_product_summary',
	function () {
		global $product;
		if ( ! $product ) {
			return;
		}
		$wa = hs_wa_producto( $product );
		if ( $wa ) {
			printf(
				'<a class="hs-wa-btn" href="%s" target="_blank" rel="noopener"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M8 13h8M8 17h5"/></svg>COTIZAR</a>',
				esc_url( $wa )
			);
		}
		echo '<ul class="hs-trust-list"><li>Envío gratis a todo México</li><li>Pago seguro con tarjeta, OXXO, transferencia, PayPal o Mercado Pago</li><li>Atención directa por WhatsApp antes y después de tu compra</li></ul>';
	},
	35
);

/** Botón "Añadir al carrito" también en las tarjetas de la tienda y de las categorías. */
function hs_boton_listado() {
	global $product;
	if ( ! function_exists( 'woocommerce_template_loop_add_to_cart' ) || ! $product ) {
		return;
	}
	ob_start();
	woocommerce_template_loop_add_to_cart();
	$html = trim( ob_get_clean() );
	if ( '' === $html ) {
		// Respaldo: si WooCommerce o un plugin no dibujó el botón, se dibuja uno propio.
		$simple = $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock();
		$html   = sprintf(
			'<a href="%1$s" class="button product_type_%2$s%3$s" data-product_id="%4$d" rel="nofollow">%5$s</a>',
			esc_url( $simple ? $product->add_to_cart_url() : get_permalink( $product->get_id() ) ),
			esc_attr( $product->get_type() ),
			$simple ? ' add_to_cart_button ajax_add_to_cart' : '',
			(int) $product->get_id(),
			esc_html( $simple ? 'Agregar' : 'Ver producto' )
		);
	}
	echo $html; // phpcs:ignore WordPress.Security.EscapeOutput
}
add_action(
	'wp',
	function () {
		if ( defined( 'ASTRA_THEME_VERSION' ) ) {
			return; // con Astra el botón lo pone su propio acomodo de la tarjeta (ver filtro de abajo)
		}
		if ( function_exists( 'is_woocommerce' ) && ( is_shop() || is_product_taxonomy() || is_product() ) ) {
			remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
			add_action( 'woocommerce_after_shop_loop_item', 'hs_boton_listado', 10 );
		}
	}
);

/**
 * Imágenes del lado izquierdo (debajo de las categorías), de 2 en 2.
 * 'img'  = archivo dentro de tu carpeta de medios (ej. '2023/01/7.jpg').
 * 'url'  = a dónde lleva ('' = no lleva a ningún lado; '/ruta/' = página de tu sitio; 'https://…' = enlace externo, ej. Google Drive).
 * 'alt'  = descripción de la imagen.
 * Para quitar una, borra su línea; para cambiar el orden, mueve las líneas.
 */
function hs_promos() {
	$cfg = hs_config();
	return array(
		array( 'img' => 'theme:promos/envio.jpg', 'url' => '', 'alt' => 'Con tu compra mínima de $500, envío gratuito con las mejores paqueterías' ),
		array( 'img' => 'theme:promos/asesoria.jpg', 'url' => $cfg['whatsapp'], 'alt' => '¿Asesoría para hacer tu pedido? Mándanos un WhatsApp' ),
		array( 'img' => 'theme:promos/catalogos.jpg', 'url' => 'https://drive.google.com/drive/folders/1-GIFlXTSquHAjgk8NoVrR6ASb1IvWHUX?usp=sharing', 'alt' => 'Catálogos' ),
		array( 'img' => 'theme:promos/curso-gratis.jpg', 'url' => $cfg['url_guias'], 'alt' => 'Curso digital gratuito de hidroponia y forraje verde hidropónico' ),
		array( 'img' => 'theme:promos/calidad.jpg', 'url' => '', 'alt' => '100% calidad: nuestros productos se elaboran con calidad y garantizados' ),
		array( 'img' => 'theme:promos/pagos.jpg', 'url' => '', 'alt' => 'Pagos 100% seguros, certificado de seguridad' ),
		array( 'img' => 'theme:promos/cursos-venta.jpg', 'url' => $cfg['url_cursos'], 'alt' => 'Cursos y contenidos digitales en venta' ),
		array( 'img' => 'theme:promos/manuales.jpg', 'url' => 'https://drive.google.com/drive/folders/1vt9Wr2WtI6nIc7UcesaqkaftAa6Z5Bjx?usp=drive_link', 'alt' => 'Manuales y guías de cultivo' ),
	);
}

/** Dirección de la imagen: usa la versión mediana de tu biblioteca (carga más rápido); si no la encuentra, la original. */
function hs_promo_src( $rel ) {
	if ( 0 === strpos( $rel, 'theme:' ) ) {
		$arch = get_stylesheet_directory() . '/assets/' . substr( $rel, 6 );
		return get_stylesheet_directory_uri() . '/assets/' . substr( $rel, 6 ) . '?v=' . ( file_exists( $arch ) ? filemtime( $arch ) : '1' );
	}
	$url = content_url( '/uploads/' . ltrim( $rel, '/' ) );
	$id  = attachment_url_to_postid( $url );
	if ( $id ) {
		$m = wp_get_attachment_image_url( $id, 'medium' );
		if ( $m ) {
			return $m;
		}
	}
	return $url;
}

/** Dibuja las imágenes de hs_promos() como lista; $clase = 'hs-promos' (lado izquierdo, escritorio) o 'hs-promos-m' (celular). */
function hs_promos_html( $clase ) {
	$out = '<ul class="' . esc_attr( $clase ) . '">';
	foreach ( hs_promos() as $p ) {
		$url  = trim( (string) $p['url'] );
		$ext  = (bool) preg_match( '#^https?://#i', $url ) && 0 !== strpos( $url, home_url() );
		$href = '' === $url ? '' : ( preg_match( '#^https?://#i', $url ) ? $url : hs_url( $url ) );
		$img  = sprintf( '<img src="%s" alt="%s" loading="lazy" width="300" height="300">', esc_url( hs_promo_src( $p['img'] ) ), esc_attr( $p['alt'] ) );
		if ( $href ) {
			$out .= sprintf( '<li><a href="%1$s"%2$s>%3$s</a></li>', esc_url( $href ), $ext ? ' target="_blank" rel="noopener"' : '', $img );
		} else {
			$out .= '<li>' . $img . '</li>';
		}
	}
	return $out . '</ul>';
}

/** Texto corto del botón en las tarjetas de producto. */
add_filter(
	'woocommerce_product_add_to_cart_text',
	function ( $text, $product ) {
		return ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() ) ? 'Agregar' : $text;
	},
	20,
	2
);

/**
 * Botón "Agregar" en las tarjetas de la tienda: en el sitio, Astra lo tenía apagado en
 * "Personalizar → WooCommerce → Tienda" (por eso salía bloqueado). Aquí se agrega siempre.
 */
add_filter(
	'astra_get_option_shop-product-structure',
	function ( $estructura ) {
		$estructura = is_array( $estructura ) ? $estructura : array( 'category', 'title', 'price' );
		if ( ! in_array( 'add_cart', $estructura, true ) ) {
			$estructura[] = 'add_cart';
		}
		return $estructura;
	}
);

/**
 * Pago: antes de "Realizar el pedido", una sola casilla para aceptar el Aviso de privacidad
 * y los Términos y condiciones, cada uno con su propio enlace (se abren en otra pestaña).
 * Se quita el párrafo largo de privacidad y el texto desplegable de términos de WooCommerce.
 */
add_action(
	'wp',
	function () {
		remove_action( 'woocommerce_checkout_terms_and_conditions', 'wc_checkout_privacy_policy_text', 20 );
		remove_action( 'woocommerce_checkout_terms_and_conditions', 'wc_terms_and_conditions_page_content', 30 );
	}
);

add_filter(
	'woocommerce_get_terms_and_conditions_checkbox_text',
	function () {
		$cfg = hs_config();
		$txt = 'He leído y acepto el <a href="%1$s" target="_blank" rel="noopener">Aviso de privacidad</a>';
		if ( ! empty( $cfg['url_terminos'] ) ) {
			$txt .= ' y los <a href="%2$s" target="_blank" rel="noopener">Términos y condiciones</a>';
		}
		return sprintf( $txt, esc_url( hs_url( $cfg['url_privacidad'] ) ), esc_url( hs_url( $cfg['url_terminos'] ) ) );
	}
);
