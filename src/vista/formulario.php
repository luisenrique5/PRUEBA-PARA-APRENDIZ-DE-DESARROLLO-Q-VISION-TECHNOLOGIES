<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="css/formulario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
</head>

<body>
    <br>
    <br>
    <div class="container text-center">
        <div class="row align-items-start">
            <br>
            <div class="col-md-6">
                <img src="Img/register.png" alt="Registro" style="width: 100%; height: auto;" id="imagenRegistro">
            </div>
            <div class="col-md-6">
                <form>
                    <legend id="tituloFormulario">Regístrate</legend>
                    <div>
                        <p for="nombre" class="label">Nombre:</p>
                        <input type="text" id="nombre" class="input">
                    </div>
                    <div>
                        <p for="apellidos" class="label">Apellidos:</p>
                        <input type="text" id="apellidos" class="input">
                    </div>
                    <div>
                        <p for="correo" class="label">Correo Electrónico:</p>
                        <input type="email" id="correo" class="input">
                    </div>
                    <div>
                        <p for="contraseña" class="label">Contraseña:</p>
                        <input type="password" id="contraseña" class="input">
                    </div>
                    <div>
                        <p for="confirm-password" class="label">Confirmar Contraseña:</p>
                        <input type="password" id="confirm-password" class="input">
                    </div>
                    <div id="checkbox">
                        <input type="checkbox" id="terms" required>
                        <label for="terms">Aceptar <a href="#">Términos y Condiciones</a></label>
                    </div>
                    <div id="checkbox">
                        <input type="checkbox" id="data-policy" required>
                        <label for="data-policy">Aceptar <a href="#">Política de Tratamiento de Datos</a></label>
                    </div>
                    <br>
                    <br>
                    <button id="botonRegistrarse" type="button" disabled>Registrarse</button>
                </form>
            </div>
        </div>
        <br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>