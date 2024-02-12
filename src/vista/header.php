<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Personalizado</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="recursos/logo.png" alt="Logo de la compañía">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li class="nav-item dropdown">
                    <button type="button" class="btn btn-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Ruta de formación
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Cientifico de Datos</a></li>
                        <li><a class="dropdown-item" href="../net.php">Ruta de Formación En.NET</a></li>
                        <li><a class="dropdown-item" href="#">Ruta de formación en Automatización </a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <button class="btn btn-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Cursos
                    </button>
                </li>
                <li><a href="#">Quiénes somos</a></li>
            </ul>

        </nav>
        <div class="login">
            <a href="#modalIniciarSesion" class="btn btn-link " data-bs-toggle="modal" role="button"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                </svg></a>
            <button class="btn btn-link" id="iniciarSesion" data-bs-toggle="modal" data-bs-target="#modalIniciarSesion">
                iniciar Sesión |
            </button>
            <a href="#" class="btn btn-link" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg></a>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalIniciarSesion" aria-hidden="true" aria-labelledby="modalIniciarSesionLabel" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content" id="contentModal">
                    <button type="button" class="btn-close" id="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h2 id="modalIniciarSesionLabel"><b>Inicie sesión en su cuenta</b></h2>
                    <br>
                    <form action="#">
                        <input type="email" id="email" placeholder="Correo Electrónico" required>
                        <input type="password" id="password" placeholder="Contraseña" required>
                        <br>
                        <br>
                        <button id="accederBoton" type="button">Acceder</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="header-text">
            <h1><b>Continúa tu formación con IzyAcademy</b></h1>
            <h2>Te ofrecemos una experiencia de aprendizaje basada
                en la formación por proyectos apoyada en el uso de recursos interactivos</h2>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>