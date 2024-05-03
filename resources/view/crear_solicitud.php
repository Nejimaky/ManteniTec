<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva solicitud de mantenimiento | ManteniTec</title>
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
                        <a href="dasboard.html" class="nav-link px-0 align-middle">
                            <i class=" fs-4 bi bi-journal"></i>
                            
                            <span class="ms-1 d-none d-sm-inline">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi bi-box-seam"></i>
                            <span class="ms-1 d-none d-sm-inline">Solicitudes de mantenimiento</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="crear_solicitud.html" class="nav-link px-0">
                                    <i class="fs-4 bi bi-plus-circle"></i>
                                    <span class="d-none d-sm-inline">Crear solicitud</span>
                                </a>
                            </li>
                            <li>
                                <a href="solicitud_creada.html" class="nav-link px-0">
                                    <i class="fs-4 bi bi-clipboard"></i>
                                    <span class="d-none d-sm-inline">Solicitudes creadas</span></a>
                            </li>
                            <li>
                                <a href="solicitud_finalizada.html" class="nav-link px-0">
                                    <i class="fs-4 bi bi-clipboard-check"></i>
                                    <span class="d-none d-sm-inline">Solicitudes finalizadas</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi bi-folder"></i>
                            <span class="ms-1 d-none d-sm-inline">Evidencias</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0">
                                    <i class="fs-4 bi bi-images"></i>
                                    <span class="d-none d-sm-inline">Subir imágenes</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0">
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
                        <li><a class="dropdown-item" href="#">Ajustes</a></li>
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
            <h1 class="text-center">Crea una nueva solicitud de mantenimiento</h1>
            <p class="lead">
            Rellena todos los campos del formulario.
            </p>
            <div class="container">
                <form action="" class="row g-3">
                    <div class="col-4">
                        <label for="text">Área solicitante</label>
                        <input type="text" class="form-control" id="areaname" placeholder="¿Qué area lo solicita?">
                    </div>
                    <div class="col-4">
                        <label for="number">Folio</label>
                        <input type="number" class="form-control" id="folionumb" placeholder="Escribe el número de folio">
                    </div>
                    <div class="col-4">
                        <label for="nombre">Fecha</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                    <div class="col-3">
                        <label for="text">Tipo de mantenimiento a realizar</label>
                        <select class="form-select" id="tipomant">
                            <option selected>Selecciona una opción</option>
                            <option value="1">Preventivo</option>
                            <option value="2">Correctivo</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="text">¿A qué se le aplicara mantenimiento?</label>
                        <select class="form-select" id="">
                            <option selected="">Selecciona una opción</option>
                            <option value="1">Hardware</option>
                            <option value="2">Software</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="text">Servicio ejecutado por personal</label>
                        <select class="form-select" id="">
                            <option selected="">Selecciona una opción</option>
                            <option value="1">Interno</option>
                            <option value="2">Externo</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="">Descripción del problema.</label>
                        <textarea class="form-control" id="problemdesc" rows="3" placeholder="Describe el problema en detalle"></textarea>
                    </div>
                    <div class="col-4">
                        <label for="">Tipo de servicio a realizar</label>
                        <select class="form-select" id="">
                            <option selected>Selecciona una opción</option>
                            <option value="1">Reparación y configuración de cualquier componente</option>
                            <option value="2">Optimización de rendimiento</option>
                            <option value="3">Eliminación de virus</option>
                            <option value="4">Errores de pantalla azul</option>
                            <option value="5">Reparación de periféricos</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="">Reporte técnico del servicio</label>
                        <select class="form-select" id="">
                            <option selected>Selecciona una opción</option>
                            <option value="1">Envejecimiento</option>
                            <option value="2">Desgaste</option>
                            <option value="3">Mala instalación</option>
                            <option value="4">El uso</option>
                            <option value="5">Medio ambiente</option>
                            <option value="6">Defecto de la pieza</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="">Medidas aplicadas</label>
                        <select class="form-select" id="">
                            <option selected>Selecciona una opción</option>
                            <option value="1">Rutina de mantenimiento</option>
                            <option value="2">Reparación</option>
                            <option value="3">Verificación</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="">Informme, diagnostico y observaciones del técnico.</label>
                        <textarea class="form-control" id="problemdesc" rows="3" placeholder="Describe en detalle"></textarea>
                    </div>
                    <div class="col-5">
                        <label for="text">Nombre del solicitante</label>
                        <input type="text" class="form-control" id="areaname" placeholder="Escribe el nombre completo">
                    </div>
                    <div class="col-5">
                        <label for="text">Nombre del ejecutante</label>
                        <input type="text" class="form-control" id="areaname" placeholder="Escribe el nombre completo">
                    </div>
                </form>
                <div class="col-12 text-center">
                    <button type="button" class="btn btn-primary mt-3">Enviar</button>
                </div>
        </div>
    </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</html>