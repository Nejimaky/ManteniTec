<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | ManteniTec</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="index.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <i class="fs-4 bi bi-box-seam"></i>
                    <span class="ms-1 fs-5 d-none d-sm-inline">ManteniTec</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li>
                        <a href="dashboard.php" class="nav-link px-0 align-middle">
                            <i class=" fs-4 bi bi-journal"></i> 
                            <span class="ms-1 d-none d-sm-inline">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi bi-box-seam"></i>
                            <span class="ms-1 d-none d-sm-inline">Solicitudes de mantenimiento</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="crear_solicitud.php" class="nav-link px-0">
                                    <i class="fs-4 bi bi-plus-circle"></i>
                                    <span class="d-none d-sm-inline">Crear solicitud</span>
                                </a>
                            </li>
                            <li>
                                <a href="solicitud_creada.php" class="nav-link px-0">
                                    <i class="fs-4 bi bi-clipboard"></i>
                                    <span class="d-none d-sm-inline">Solicitudes creadas</span></a>
                            </li>
                            <li>
                                <a href="solicitud_finalizada.php" class="nav-link px-0">
                                    <i class="fs-4 bi bi-clipboard-check"></i>
                                    <span class="d-none d-sm-inline">Solicitudes finalizadas</span></a>
                            </li>
                            <li>
                                <a href="solicitud_programada.php" class="nav-link px-0">
                                    <i class="fs-4 bi bi-clock-history"></i>
                                    <span class="d-none d-sm-inline">Solicitudes programadas</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi bi-folder"></i>
                            <span class="ms-1 d-none d-sm-inline">Evidencias</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="subir_imagenes.php" class="nav-link px-0">
                                    <i class="fs-4 bi bi-images"></i>
                                    <span class="d-none d-sm-inline">Subir imágenes</span>
                                </a>
                            </li>
                            <li>
                                <a href="crear_reporte.php" class="nav-link px-0">
                                    <i class="fs-4 bi bi-clipboard-plus"></i>
                                    <span class="d-none d-sm-inline">Crear un nuevo reporte</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Clientes</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://i.pinimg.com/originals/52/0f/0c/520f0cab8d4a8d56f59b9352b13998dd.jpg" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Rasen</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="ajustes.php">Ajustes</a></li>
                        <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
            <h1>Bienvenido a ManteniTec</h1>
            <p class="lead">
                Simplificamos el seguimiento y mantenimiento de tus equipos informáticos.
            </p>
            <h4>Ordenes de mantenimiento activas</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fecha de creación</th>
                        <th scope="col">Fecha de programación</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>02/03/2024</td>
                        <td>06/02/2024</td>
                        <td>Programada</td>
                        <td>
                            <a href="#" class="btn btn-primary">Ver detalles</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>02/03/2024</td>
                        <td>06/02/2024</td>
                        <td>Programada</td>
                        <td>
                            <a href="#" class="btn btn-primary">Ver detalles</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>02/03/2024</td>
                        <td>06/02/2024</td>
                        <td>Programada</td>
                        <td>
                            <a href="#" class="btn btn-primary">Ver detalles</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h4>Mantenimientos programados para la semana</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fecha de creación</th>
                        <th scope="col">Fecha de programación</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>07/04/2024</td>
                        <td>01/10/2021</td>
                        <td>Programada</td>
                        <td>
                            <a href="#" class="btn btn-primary">Ver detalles</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>09/04/2024</td>
                        <td>01/10/2021</td>
                        <td>Programada</td>
                        <td>
                            <a href="#" class="btn btn-primary">Ver detalles</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>10/04/2024</td>
                        <td>01/10/2021</td>
                        <td>Programada</td>
                        <td>
                            <a href="#" class="btn btn-primary">Ver detalles</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</html>