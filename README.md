# Hidrosystems (tema hijo de Astra) v1.0

Requiere el tema **Astra** instalado (no hace falta activarlo) y **WooCommerce**.

## Instalar (primero en tu copia de prueba, no en la tienda en vivo)

1. WordPress > Apariencia > Temas > Añadir nuevo > Subir tema.
2. Sube `hidrosystems-child.zip` y pulsa Instalar, luego Activar.
3. Revisa el inicio, una categoría, un producto, el carrito y el pago.

Para volver atrás: Apariencia > Temas > activa Astra otra vez. No se borra nada.

## Qué cambia

- **Inicio:** `front-page.php`. Más vendidos (automático según ventas), accesos a 3 categorías, novedades y bloque de cursos. La portada anterior hecha con Elementor sigue guardada, sin tocar.
- **Encabezado y pie de página:** `header.php` y `footer.php`, en todo el sitio.
- **Categorías en texto:** columna a la izquierda en el inicio, la tienda y las categorías. En celular es un menú desplegable.
- **Páginas hechas con Elementor** (cursos, sobre nosotros, etc.) siguen funcionando, ahora con el nuevo encabezado y pie.

## Qué editar (todo en `functions.php`)

- `hs_config()`: barra superior, teléfono, correo, enlaces y redes. Lo que dejes vacío no se muestra.
- `hs_category_menu()`: orden y nombre de las categorías del menú (por su slug).
- `hs_featured_categories()`: las 3 categorías grandes del inicio.
- `trust`: franja de confianza (envíos, pago seguro...). Se muestra con 2 o más elementos.
- Foto principal del inicio: sube un archivo `hero.jpg` a la carpeta `assets/` del tema. Sin ese archivo, el banner va solo con texto.
- Logo: Apariencia > Personalizar > Identidad del sitio. Sin logo se muestra el nombre en texto.

## Colores

Están al principio de `style.css` (`--hs-accent`, `--hs-dark`, `--hs-lime`).
