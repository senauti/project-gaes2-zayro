<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Panel de control - Zayro Disfraces</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/png" href="{{ asset('images/logo2.png') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset("css/dashboard.css")}}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <input type="checkbox" id="nav-toggle">

    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span><i class="fas fa-mask"></i></span><span id="kleenpulse">Zayro System</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.html" class="active"><span class="fas fa-cubes"></span>
                        <span>Panel de control</span>
                    </a>
                </li>
                <li>
                    <a href="#"><span class="fas fa-users"></span>
                        <span>Clientes</span>
                    </a>
                </li>
                <li>
                    <a href="informes.html"><span class="fas fa-clipboard-list"></span>
                        <span>Informes</span>
                    </a>
                </li>
                <li>
                    <a href="#"><span class="fas fa-shopping-bag"></span>
                        <span>Pedidos</span>
                    </a>
                </li>
                <li>
                    <a href="inventario.html"><span class="fas fa-table"></span>
                        <span>Inventario</span>
                    </a>
                </li>
                <li>
                    <a href="factura.html"><span class="fas fa-receipt"></span>
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
                    <a href="#"><span class="fas fa-shopping-cart"></span>
                        <span>Carrito</span>
                    </a>
                </li>
                <li>
                    <a href="index.html"><span class="fas fa-house-user"></span>
                        <span>Página de inicio</span>
                    </a>
                </li>
                <li>
                    <a href="#"><span class="fas fa-sign-out-alt"></span>
                        <span>Salir</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-wrapper">
        <div class="main-content">
            <header>
                <img src="{{asset("images/logo2.png")}}" alt="logo zayro disfraces" width="80px" style="background-color:white; border-radius: 20px; margin-left: 50px;">
                <h2 class="heading" id="dashboard">
                    Panel de control
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
                    <img src="{{asset("images/logo1.png")}}"
                        alt="logo zayro system">
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
                            <span>Clientes</span>
                        </div>
                        <div>
                            <span class="fas fa-users"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1 id="project"></h1>
                            <span>Informes</span>
                        </div>
                        <div>
                            <span class="fas fa-clipboard"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1 id="order"></h1>
                            <span>Pedidos realizados</span>
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
                            <span>disfraces por reabastecer</span>
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
                                <h3 class="heading">Últimos pedidos</h3>
                                <button>Ver todos <span class="fas fa-arrow-right"></span></button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td>Tipo de pedido</td>
                                                <td>Fecha</td>
                                                <td>Estado</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Alquiler</td>
                                                <td>20/03/2023</td>
                                                <td>
                                                    <span class="status purple"></span>entregado
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Venta</td>
                                                <td>19/03/2023</td>
                                                <td>
                                                    <span class="status pink"></span>pendiente
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alquiler</td>
                                                <td>17/03/2023</td>
                                                <td>
                                                    <span class="status orange"></span>en camino
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alquiler</td>
                                                <td>17/03/2023</td>
                                                <td>
                                                    <span class="status purple"></span>entregado
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Venta</td>
                                                <td>15/03/2023</td>
                                                <td>
                                                    <span class="status pink"></span>pendiente
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Venta</td>
                                                <td>15/03/2023</td>
                                                <td>
                                                    <span class="status orange"></span>en camino
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alquiler</td>
                                                <td>15/03/2023</td>
                                                <td>
                                                    <span class="status purple"></span>entregado
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Venta</td>
                                                <td>14/03/2023</td>
                                                <td>
                                                    <span class="status pink"></span>pendiente
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Venta</td>
                                                <td>10/03/2023</td>
                                                <td>
                                                    <span class="status orange"></span>en camino
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alquiler</td>
                                                <td>10/03/2023</td>
                                                <td>
                                                    <span class="status purple"></span>entregado
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Venta</td>
                                                <td>10/03/2023</td>
                                                <td>
                                                    <span class="status pink"></span>pendiente
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Venta</td>
                                                <td>10/03/2023</td>
                                                <td>
                                                    <span class="status orange"></span>en camino
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="customers">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="heading">Nuevos clientes</h3>
                                <button>Ver todos<span class="fas fa-arrow-right"></span></button>
                            </div>

                            <div class="card-body">
                                <div class="customer">
                                    <div class="info">
                                        <img src="{{asset("images/user-solid.svg")}}"
                                            alt="usuario">
                                        <div>
                                            <h4>
                                                Jorge Cardenas</h4>
                                            <small>20/03/2023 15:50</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="fas fa-user-circle"></span>
                                        <span class="fas fa-envelope"></span>
                                        <span class="fas fa-flag"></span>
                                    </div>
                                </div>

                                <div class="customer">
                                    <div class="info">
                                        <img src="{{asset("images/user-solid.svg")}}"
                                            alt="usuario">
                                        <div>
                                            <h4>Simon Estrada</h4>
                                            <small>20/03/2023 14:45
                                            </small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="fas fa-user-circle"></span>
                                        <span class="fas fa-envelope"></span>
                                        <span class="fas fa-flag"></span>
                                    </div>
                                </div>

                                <div class="customer">
                                    <div class="info">
                                        <img src="{{asset("images/user-solid.svg")}}"
                                            alt="usuario">
                                        <div>
                                            <h4>Felipe Alvarez</h4>
                                            <small>20/03/2023 14:30</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="fas fa-user-circle"></span>
                                        <span class="fas fa-envelope"></span>
                                        <span class="fas fa-flag"></span>
                                    </div>
                                </div>

                                <div class="customer">
                                    <div class="info">
                                        <img src="{{asset("images/user-solid.svg")}}"
                                            alt="usuario">
                                        <div>
                                            <h4>Andres Figueroa</h4>
                                            <small>19/03/2023 20:44</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="fas fa-user-circle"></span>
                                        <span class="fas fa-envelope"></span>
                                        <span class="fas fa-flag"></span>
                                    </div>
                                </div>

                                <div class="customer">
                                    <div class="info">
                                        <img src="{{asset("images/user-solid.svg")}}"
                                            alt="usuario">
                                        <div>
                                            <h4>Carolina Gomez</h4>
                                            <small>19/03/2023 20:40</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="fas fa-user-circle"></span>
                                        <span class="fas fa-envelope"></span>
                                        <span class="fas fa-flag"></span>
                                    </div>
                                </div>

                                <div class="customer">
                                    <div class="info">
                                        <img src="{{asset("images/user-solid.svg")}}"
                                            alt="usuario">
                                        <div>
                                            <h4>Daniela Coha</h4>
                                            <small>19/03/2023 15:44</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="fas fa-user-circle"></span>
                                        <span class="fas fa-envelope"></span>
                                        <span class="fas fa-flag"></span>
                                    </div>
                                </div>

                                <div class="customer">
                                    <div class="info">
                                        <img src="{{asset("images/user-solid.svg")}}"
                                            alt="usuario">
                                        <div>
                                            <h4>Karla Montoya</h4>
                                            <small>14/03/2023 20:30</small>
                                        </div>
                                    </div>
                                    <div class="contact">
                                        <span class="fas fa-user-circle"></span>
                                        <span class="fas fa-envelope"></span>
                                        <span class="fas fa-flag"></span>
                                    </div>
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
    <!-- partial -->
    <script src="{{asset("js/dashboard.js")}}"></script>

</body>

</html>