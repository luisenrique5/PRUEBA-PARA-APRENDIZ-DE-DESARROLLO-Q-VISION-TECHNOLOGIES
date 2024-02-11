<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Personalizado</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/header.js" type="text/javascript"></script> <!-- Enlace al archivo JavaScript -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="Recursos/logo.png" alt="Logo de la compañía">
        </div>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li class="nav-item dropdown">
                    <button class="btn btn-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Ruta de formación
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Cientifico de Datos</a></li>
                        <li><a class="dropdown-item" href="#">Ruta de Formación En.NET</a></li>
                        <li><a class="dropdown-item" href="#">Ruta de formación en Automatización </a></li>
                    </ul>
                </li>
                <li><a href="#">Cursos</a></li>
                <li><a href="#">Quiénes somos</a></li>
            </ul>

        </nav>
        <div class="login">
            <a href="#modalIniciarSesion" data-bs-toggle="modal" role="button">Iniciar sesión</a>


        </div>
        <div class="modal fade" id="modalIniciarSesion" aria-hidden="true" aria-labelledby="modalIniciarSesionLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalIniciarSesionL">INICIAR SESIÓN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Hide this modal and show the first with the button below.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                    </div>
                </div>
                   
            </div>
        </div>
        <div class="header-text">
            <h1>Continúa tu formación con IZYAcademy</h1>
            <h2>Te ofrecemos una experiencia de aprendizaje basada
                en la formación por proyectos apoyada en el uso de recursos interactivos</h2>
        </div>
    </header>
</body>

</html>