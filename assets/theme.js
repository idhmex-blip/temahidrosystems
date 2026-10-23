/* En celular el menú de categorías empieza cerrado; en escritorio siempre abierto. */
(function () {
	function sync() {
		var boxes = document.querySelectorAll('.hs-cats details');
		var small = window.matchMedia('(max-width: 782px)').matches;
		for (var i = 0; i < boxes.length; i++) {
			if (small) {
				if (!boxes[i].hasAttribute('data-hs-touched')) {
					boxes[i].removeAttribute('open');
				}
			} else {
				boxes[i].setAttribute('open', '');
			}
		}
	}
	document.addEventListener('DOMContentLoaded', function () {
		var boxes = document.querySelectorAll('.hs-cats details');
		for (var i = 0; i < boxes.length; i++) {
			boxes[i].addEventListener('toggle', function () {
				this.setAttribute('data-hs-touched', '1');
			});
		}
		sync();
		window.addEventListener('resize', sync);
	});
})();

/* Carrusel del recuadro verde del inicio: cambia la imagen de fondo cada N segundos (5 por defecto). */
(function () {
	document.addEventListener('DOMContentLoaded', function () {
		var hero = document.querySelector('.hs-banner-wrap, .hs-hero.has-slides');
		if (!hero) { return; }
		var slides = hero.querySelectorAll('.hs-banner-slide, .hs-hero-slide');
		var dots = hero.querySelectorAll('.hs-banner-dot, .hs-hero-dot');
		if (slides.length < 2) { return; }
		var ms = (parseInt(hero.getAttribute('data-seg'), 10) || 5) * 1000;
		var reducido = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
		var actual = 0, reloj = null;
		function mostrar(n) {
			actual = (n + slides.length) % slides.length;
			for (var i = 0; i < slides.length; i++) {
				slides[i].classList.toggle('is-active', i === actual);
				slides[i].setAttribute('tabindex', i === actual ? '0' : '-1');
				if (dots[i]) { dots[i].classList.toggle('is-active', i === actual); }
			}
		}
		function parar() { if (reloj) { clearInterval(reloj); reloj = null; } }
		function iniciar() {
			parar();
			if (reducido) { return; }
			reloj = setInterval(function () { mostrar(actual + 1); }, ms);
		}
		for (var i = 0; i < dots.length; i++) {
			(function (k) { dots[k].addEventListener('click', function () { mostrar(k); iniciar(); }); })(i);
		}
		hero.addEventListener('mouseenter', parar);
		hero.addEventListener('mouseleave', iniciar);
		document.addEventListener('visibilitychange', function () { if (document.hidden) { parar(); } else { iniciar(); } });
		iniciar();
	});
})();

(function () {
	var b = document.querySelector('.hs-burger'), m = document.getElementById('hs-mnav');
	if (!b || !m) { return; }
	b.addEventListener('click', function () {
		var abre = m.hasAttribute('hidden');
		if (abre) { m.removeAttribute('hidden'); } else { m.setAttribute('hidden', ''); }
		b.setAttribute('aria-expanded', abre ? 'true' : 'false');
		b.classList.toggle('is-open', abre);
	});
})();

/* Carrito: si algo (un enfoque, un script de pago) desplaza de lado la página o la tabla, se regresa a su lugar. */
(function () {
	if (!document.body || !/\bwoocommerce-cart\b/.test(document.body.className)) { return; }
	function volver() {
		if (window.scrollX) { window.scrollTo(0, window.scrollY); }
		var q = document.querySelectorAll('.woocommerce-cart-form, table.shop_table, .cart-collaterals, .cart_totals, #content, #page, .site-content, body, html');
		for (var i = 0; i < q.length; i++) { if (q[i].scrollLeft) { q[i].scrollLeft = 0; } }
	}
	document.addEventListener('scroll', volver, true);
	window.addEventListener('load', volver);
	window.addEventListener('resize', volver);
})();

/* Video del inicio: el navegador solo permite autoplay sin sonido; este botón lo activa con un toque */
(function () {
	var b = document.getElementById('hs-video-sonido'), v = document.getElementById('hs-video-yt');
	if (!b || !v) return;
	b.addEventListener('click', function () {
		['unMute', 'setVolume'].forEach(function (fn) {
			v.contentWindow.postMessage(JSON.stringify({ event: 'command', func: fn, args: fn === 'setVolume' ? [100] : [] }), '*');
		});
		v.contentWindow.postMessage(JSON.stringify({ event: 'command', func: 'playVideo', args: [] }), '*');
		b.hidden = true;
	});
})();
