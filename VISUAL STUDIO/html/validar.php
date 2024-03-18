<?php
$Usuario = $_POST['Usuario'];
$Contraseña = $_POST['Contraseña'];
session_start();
$_SESSION['Usuario'] = $Usuario;

$conexion = mysqli_connect("localhost", "root", "Ssbc0506", "sup_inventarios");

$consulta = "SELECT * FROM rol WHERE Usuario='$Usuario' AND Contraseña='$Contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location: PROD2.php");
} else {
    include("PROYECTO.php");
    echo "<center> <h1 class='bad'>DATOS INCORRECTOS INTENTE DE NUEVO</h1></center>";
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>







