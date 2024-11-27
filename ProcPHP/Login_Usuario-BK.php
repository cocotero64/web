<?php
session_start();
include 'conection-BK.php';

//  variables del post
if (isset($_POST['ADRSS']) && isset($_POST['PASSW'])) {
    $Correo_Electronico = trim($_POST['ADRSS']);
    $Contraseña = trim($_POST['PASSW']);

    // Consulta usuario
    $query = "SELECT * FROM usuarios WHERE correo = ?";
    $stmt = mysqli_prepare($conection, $query);

    if ($stmt) {
        //Pasar datos
        mysqli_stmt_bind_param($stmt, "s", $Correo_Electronico);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $usuario = mysqli_fetch_assoc($result);

            // consultar la contrasena
            if (password_verify($Contraseña, $usuario['contrasena'])) {
                // Iniciar sesión y redirigir
                $_SESSION['usuario'] = $Correo_Electronico;
                header("Location: ../Beggining.php");
                exit();
            } else {
                // Contraseña incorrecta
                echo '
                <script>
                alert("Contraseña incorrecta.");
                window.location = "../index.php";
                </script>';
                exit();
            }
        } else {
            // Correo no encontrado
            echo '
            <script>
            alert("Correo electrónico no encontrado.");
            window.location = "../index.php";
            </script>';
            exit();
        }
    } else {
        die("Error en la consulta: " . mysqli_error($conection));
    }
} else {
    // Datos no enviados
    echo '
    <script>
    alert("Por favor, completa todos los campos.");
    window.location = "../index.php";
    </script>';
    exit();
}
?>
