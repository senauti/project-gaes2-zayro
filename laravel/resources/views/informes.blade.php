<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Informes - Zayro Disfraces</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="{{ asset('img/logo2.png') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/informes.css') }}">

</head>

<body>

    <input type="checkbox" id="nav-toggle">

    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span><i class="fas fa-mask"></i></span><span id="kleenpulse">Zayro System</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ url('/dashboard') }}"><span class="fas fa-cubes"></span>
                        <span>Panel de control</span>
                    </a>
                </li>
                <li>
                    <a href="#"><span class="fas fa-users"></span>
                        <span>Clientes</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/informes') }}" class="active"><span class="fas fa-clipboard-list"></span>
                        <span>Informes</span>
                    </a>
                </li>
                <li>
                    <a href="#"><span class="fas fa-shopping-bag"></span>
                        <span>Pedidos</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/inventario') }}"><span class="fas fa-table"></span>
                        <span>Inventario</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/factura') }}"><span class="fas fa-receipt"></span>
                        <span>Facturación</span>
                    </a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-user-circle"></span>
                        <span>Vendedores</span>
                    </a>
                </li>
                <li>
                    <a href="#"><span class="fas fa-calendar-plus"></span>
                        <span>Marketing</span>
                    </a>
                </li>
                <li>
                    <a href="#"><span class="fas fa-headset"></span>
                        <span>Atención al cliente</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/carrito') }}"><span class="fas fa-shopping-cart"></span>
                        <span>Carrito</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}"><span class="fas fa-house-user"></span>
                        <span>Página de inicio</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}"><span class="fas fa-sign-out-alt"></span>
                        <span>Salir</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-wrapper">
        <div class="main-content">
            <header>
                <img src="{{ asset('img/logo2.png') }}" alt="" width="80px"
                    style="background-color:white; border-radius: 20px; margin-left: 50px;">
                <h2 class="heading" id="dashboard">
                    Informes
                </h2>
                <label for="nav-toggle">
                    <span class="fas fa-bars"></span>
                </label>

                <div class="search">
                    <div class="search-rotate">
                        <div class="icon"></div>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Buscar" id="mysearch" autocomplete="off"
                            onkeydown="display(this)">
                    </div>
                </div>

                <div class="user-wrapper">
                    <img src="{{ asset('img/logo1.png') }}" alt="">
                    <div>
                        <h4>Olga D'aleman</h4>
                        <b>Administrador</b></small>
                    </div>
                </div>
            </header>
            <main>
                <div class="switch" id="switch">
                    <div id="toggle">
                    </div>
                </div>
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h1 id="customer"></h1>
                            <span>Disfraces sin enviar</span>
                        </div>
                        <div>
                            <span class="fas fa-users"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1 id="project"></h1>
                            <span>Vistas en anuncios</span>
                        </div>
                        <div>
                            <span class="fas fa-clipboard"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1 id="order"></h1>
                            <span>Facturas en la semana</span>
                        </div>
                        <div>
                            <span class="fas fa-shopping-bag"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>
                                <p id="income"></p>
                            </h1>
                            <span>Ventas online</span>
                        </div>
                        <div>
                            <span class="fas fa-theater-masks"></span>
                        </div>
                    </div>
                </div>
                <div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="heading">Informes por barras</h3>
                            </div>
                            <div class="card-body">
                                <div id="highchart_container" style="width: 100%; max-width: 800px; margin: 0 auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
            <div class="footer">
                <div class="word">
                    <p>Zayro System © 2023</p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/informes.js') }}"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
</body>

</html>
