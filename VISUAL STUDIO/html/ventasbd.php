<?php

$conexion = mysqli_connect("localhost", "root", "Ssbc0506", "sup_inventarios");

if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}

if(isset($_POST['ingresar_ventas'])) {
    // Manejar el formulario para registrar ventas
    $NumSalida = mysqli_real_escape_string($conexion, $_POST['NumSalida']);
    $IDempleado4 = mysqli_real_escape_string($conexion, $_POST['IDempleado4']);
    $Codigo_Producto4 = mysqli_real_escape_string($conexion, $_POST['Codigo_Producto4']);
    $Almacen = mysqli_real_escape_string($conexion, $_POST['Almacen']);
    $Lote_salida = mysqli_real_escape_string($conexion, $_POST['Lote_salida']);
    $Fecha_salida_stock = mysqli_real_escape_string($conexion, $_POST['Fecha_salida_stock']);
    $Fecha_In_Inv = mysqli_real_escape_string($conexion, $_POST['Fecha_In_Inv']);
    $Observación = mysqli_real_escape_string($conexion, $_POST['Observación']);
    

    // Validar los datos si es necesario
    // Por ejemplo, puedes verificar si los campos requeridos no están vacíos
    
    if(empty($NumSalida) || empty($IDempleado4) || empty($Codigo_Producto4) || empty($Almacen) || empty($Lote_salida) || empty($Fecha_In_Inv)) {
        die("Error: Todos los campos obligatorios deben ser completados.");
    }

    $Fecha_In_Inv = date("Y-m-d", strtotime($_POST['Fecha_In_Inv']));
    $Fecha_salida_stock = date("Y-m-d", strtotime($_POST['Fecha_salida_stock']));
    

    $sql= "INSERT INTO Ventas (NumSalida, IDempleado4, Codigo_Producto4, Almacen, Lote_salida, Fecha_salida_stock, Fecha_In_Inv, Observación) 
    VALUES ('$NumSalida','$IDempleado4','$Codigo_Producto4','$Almacen','$Lote_salida','$Fecha_salida_stock','$Fecha_In_Inv','$Observación')";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro de venta exitoso";
    } else {
        echo "Error al registrar venta: " . $conexion->error;
    }
} else {
    echo "Error: No se recibió ningún formulario válido.";
}

$conexion->close();

?>
