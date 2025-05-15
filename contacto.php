<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $mensaje = $_POST["mensaje"];

        if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
            echo "Gracias por tu mensaje, " . $nombre . ".";
        } else {
            echo "Por favor, completa todos los campos.";
        }
    }
    ?>

    <!-- Formulario -->
    <form method="post" action="" onsubmit="return validarFormulario()">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" id="email"><br><br>

        <label>Mensaje:</label><br>
        <textarea name="mensaje" id="mensaje"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>

    <script>
        function validarFormulario() {
            var nombre = document.getElementById("nombre").value;
            var email = document.getElementById("email").value;
            var mensaje = document.getElementById("mensaje").value;

            if (nombre === "" || email === "" || mensaje === "") {
                alert("Por favor, completa todos los campos.");
                return false;
            }

            // Validación 
            if (!email.includes("@") || !email.includes(".")) {
                alert("Introduce un correo electrónico válido.");
                return false;
            }

            return true; // Envio formulario
        }
    </script>

</body>

</html>