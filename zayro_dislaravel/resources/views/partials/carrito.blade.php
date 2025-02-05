<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Carrito de compras | Zayro Disfraces</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'>
    <link rel="stylesheet" href="{{ asset('css/carrito.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/logo2.png') }}">
</head>

<body>
    <header id="site-header">
        <div class="container">
            <h1>Carrito<span>[</span> <em><a href="{{ url('/') }}" target="_blank">Zayro System</a></em><span
                    class="last-span is-open">]</span></h1>
        </div>
    </header>

    <div class="container">

        <section id="cart">
            <article class="product">
                <header>
                    <a class="remove">
                        <img src="{{ asset('https://ik.imagekit.io/Bc/carrusel4.webp') }}" alt="">

                        <h3>Eliminar producto</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Disfraz Hombre araña</h1>

                    Disfraz para hombre de talla XXL.

                    <div title="Has seleccionado el disfrazde hombre araña" style="top: 0" class="color yellow"></div>
                    <div style="top: 43px" class="type small">XXL</div>
                </div>

                <footer class="content">
                    <span class="qt-minus">-</span>
                    <span class="qt">2</span>
                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        $25.000
                    </h2>

                    <h2 class="price">
                        $50.500
                    </h2>
                </footer>
            </article>

            <article class="product">
                <header>
                    <a class="remove">
                        <img src="{{ asset('https://ik.imagekit.io/Bc/carrusel7.webp') }}" alt="">

                        <h3>Eliminar producto</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Disfraz Espantapájaros</h1>

                    Disfraz de Espantapájaros para mujer talla L.

                    <div title="Has seleccionado el disfraz del Espantapajaros" style="top: 0" class="color red"></div>
                    <div title="Has seleccionado talla L" style="top: 43px" class="type small">L</div>
                </div>

                <footer class="content">

                    <span class="qt-minus">-</span>
                    <span class="qt">1</span>
                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        $59.050
                    </h2>

                    <h2 class="price">
                        $59.050
                    </h2>
                </footer>
            </article>

            <article class="product">
                <header>
                    <a class="remove">
                        <img src="{{ asset('https://ik.imagekit.io/Bc/ninos.webp') }}" alt="">

                        <h3>Eliminar producto</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Disfraz Esqueleto</h1>

                    Disfraz para niño de esqueleto talla S.

                    <div title="Has seleccionado el disfraz de esqueleto" style="top: 0" class="color blue"></div>
                    <div style="top: 43px" class="type small">S</div>
                </div>

                <footer class="content">
                    <span class="qt-minus">-</span>
                    <span class="qt">3</span>
                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        $50.450
                    </h2>

                    <h2 class="price">
                        $19.900
                    </h2>
                </footer>
            </article>

        </section>

    </div>

    <footer id="site-footer">
        <div class="container clearfix">
            <div class="left">
                <h2 class="subtotal">Subtotal: $<span>50.000</span></h2>
                <h3 class="tax">IVA (5%): $<span>5.000</span></h3>
                <h3 class="shipping">Envío: $<span>10.000</span></h3>
            </div>

            <div class="right">
                <h1 class="total">Total: $<span>65.000</span></h1>
                <a class="btn">Proceder al pago</a>
            </div>
        </div>
    </footer>

    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{ asset('js/carrito.js') }}"></script>

</body>

</html>
