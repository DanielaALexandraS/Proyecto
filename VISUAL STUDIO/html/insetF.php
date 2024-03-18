<?php

$conexion = mysqli_connect("localhost", "root", "Ssbc0506", "sup_inventarios");

if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}

if(isset($_POST['ingresar_usuario'])) {
    // Manejar el formulario para registrar usuarios
    $Nombre_completo = $_POST['Nombre_completo'];
    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['Contraseña'];
    $correo = $_POST['Correo'];
    $Fecha_Ingreso = $_POST['Fecha_Ingreso'];

    $Fecha_Ingreso = date("Y-m-d", strtotime($_POST['Fecha_Ingreso']));

    $sql= "INSERT INTO rol (Nombre_completo, Usuario, Contraseña, correo, Fecha_Ingreso) 
    VALUES ('$Nombre_completo','$Usuario','$Contraseña','$correo','$Fecha_Ingreso')";

    if ($conexion->query($sql) === TRUE) {
        echo "<center> <h1 class='bad'>Registro de usuario exitoso</h1></center>";
    } else {
        echo "<center> <h1 class='bad'>Error al registrar usuario:</h1></center> " . $conexion->error;
    }
} elseif(isset($_POST['registro_inventario'])) {
    // Manejar el formulario para registrar inventario
    $Num_inventario = $_POST['Num_inventario'];
    $Id_empleado2 = $_POST['Id_empleado2'];
    $Fecha_Inv = $_POST['Fecha_Inv'];
    $Lote = $_POST['Lote'];
    $Cod_producto = $_POST['Cod_producto'];
    $Fecha_Ingreso_inv = $_POST['Fecha_Ingreso_inv'];
    $Vencimiento = $_POST['Vencimiento'];
    $Observacion = $_POST['Observacion'];

    $Fecha_Inv = date("Y-m-d", strtotime($_POST['Fecha_Inv']));
    $Fecha_Ingreso_inv = date("Y-m-d", strtotime($_POST['Fecha_Ingreso_inv']));
    $Vencimiento = date("Y-m-d", strtotime($_POST['Vencimiento']));

    $sql= "INSERT INTO inventarios (Num_inventario, Id_empleado2, Fecha_Inv, Lote, Cod_producto, Fecha_Ingreso_inv, Vencimiento, Observacion) 
    VALUES ('$Num_inventario','$Id_empleado2','$Fecha_Inv','$Lote','$Cod_producto','$Fecha_Ingreso_inv','$Vencimiento','$Observacion')";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro de inventario exitoso";
    } else {
        echo "Error al registrar inventario: " . $conexion->error;
    }
} else {
    echo "Error: No se recibió ningún formulario válido.";
}

var_dump($_POST);

$conexion->close();

?>
