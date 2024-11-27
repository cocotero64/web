<?php

include 'conection-BK.php';

$Nombre_Completo = $_POST['Complete_Name'];
$Correo_Electronico = $_POST['Correo'];
$Usuario = $_POST['User'];
$Contraseña = $_POST['Password'];


if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%#*?&])[A-Za-z\d@$!%*?&]{8,}$/', $Contraseña)) {
    echo '
    <script>
    alert("La contraseña debe tener al menos 8 caracteres, incluyendo al menos 1 letra, 1 número y 1 carácter especial.");
    window.location = "../index.php";
    </script>';
    exit();
}

// Hashear la contrasena
$ContraseñaHasheada = password_hash($Contraseña, PASSWORD_BCRYPT);

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
          VALUES('$Nombre_Completo', '$Correo_Electronico', '$Usuario', '$ContraseñaHasheada')";

// Verificar corre0s
$verificar_correo = mysqli_query($conection, "SELECT * FROM usuarios WHERE correo='$Correo_Electronico'");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
    alert("Este correo ya está registrado.");
    window.location = "../index.php";
    </script>';
    exit();
}

// Verificar verificar usuario
$verificar_usuario = mysqli_query($conection, "SELECT * FROM usuarios WHERE usuario='$Usuario'");

if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
    <script>
    alert("Este usuario ya está registrado.");
    window.location = "../index.php";
    </script>';
    exit();
}

// Agregar un usuario
$ejecutar = mysqli_query($conection, $query);

if ($ejecutar) {
    header("Location: ../Beggining.php");
    exit;
} else {
    echo "Error al crear el usuario.";  
}

?>
