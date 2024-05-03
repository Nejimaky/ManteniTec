<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia Sesión o regístrate | ManteniTec</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <h1>ManteniTec</h1>
                <i class="bi bi-box" style="font-size: 6em;"></i>
                <p> Simplificamos el seguimiento y mantenimiento de tus equipos informáticos.</p>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="controlNumber" class="form-label">Número de control</label>
                        <input type="number" class="form-control" id="controlNumber">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#registerModal">Registrarse</button>

                    <!-- Modal -->
                    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="registerModalLabel">Registrate</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <!-- Form fields for registration -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Nombre</label>
                                                    <input type="text" class="form-control" id="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="lastname" class="form-label">Apellidos</label>
                                                    <input type="text" class="form-control" id="lastname">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Correo electrónico</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Contraseña</label>
                                            <input type="password" class="form-control" id="password">
                                        </div>
                                        <!-- Add more form fields as needed -->
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Registrarse</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</html>