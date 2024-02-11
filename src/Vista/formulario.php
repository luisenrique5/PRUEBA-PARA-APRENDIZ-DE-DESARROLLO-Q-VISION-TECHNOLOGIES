<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario de Registro</title>
</head>
<body>

<div class="container">
    <div class="side-image">
        <img src="img/register.png" alt="Registro" style="width: 100%; height: auto;">
    </div>
    <div class="form-container">
        <form action="registro.php" method="post" id="register-form">
            <div class="form-control">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-control">
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" required>
            </div>
            <div class="form-control">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-control">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-control">
                <label for="confirm-password">Confirmar Contraseña:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <div class="terminos">
                <input type="checkbox" id="terms" required>
                <label for="terms">Aceptar Términos y Condiciones</label>
            </div>
            <div class="terminos">
                <input type="checkbox" id="data-policy" required>
                <label for="data-policy">Aceptar Política de Tratamiento de Datos</label>
            </div>
            <button id="submit-btn" type="submit" disabled>Registrarse</button>
        </form>
    </div>
</div>

<script>
    const termsCheckbox = document.getElementById("terms");
    const dataPolicyCheckbox = document.getElementById("data-policy");
    const submitButton = document.getElementById("submit-btn");

    function validateCheckboxes() {
        if (termsCheckbox.checked && dataPolicyCheckbox.checked) {
            submitButton.disabled = false;
            submitButton.style.opacity = "1";
            submitButton.style.cursor = "pointer";
        } else {
            submitButton.disabled = true;
            submitButton.style.opacity = "0.5";
            submitButton.style.cursor = "not-allowed";
        }
    }

    termsCheckbox.addEventListener("change", validateCheckboxes);
    dataPolicyCheckbox.addEventListener("change", validateCheckboxes);
</script>

</body>
</html>



