<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROYECTO2</title>
    <link rel="stylesheet" href="styleprod2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* Importa los estilos del formulario de usuarios */
        /* Estilos para el contenedor de los botones */
        .botones-container {
            text-align: center; /* Alinea los botones al centro */
            margin-top: 20px; /* Espacio superior */
        }

        /* Estilo para los botones */
        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            margin: 0 5px; /* Espacio entre los botones */
        }

        .btn:hover {
            background-color: #0056b3; /* Cambiar el color de fondo al pasar el ratón */
        }

        /* Estilos para los campos de entrada */
        input[type="text"], input[type="date"], textarea {
            width: 35%; /* Ancho del campo de entrada */
            padding: 5px; /* Espaciado interno */
            margin-bottom: 15px; /* Espacio inferior */
            border: 2px solid #007bff; /* Borde */
            border-radius: 20px; /* Borde redondeado */
            box-sizing: border-box; /* Incluir el borde en el ancho total */
            background-color: #f0f0f0; /* Color de fondo */
            color: #333; /* Color del texto */
            font-size: 16px; /* Tamaño del texto */
            outline: none; /* Eliminar el resaltado al hacer clic */
        }

        input[type="text"]:focus, input[type="date"]:focus, textarea:focus {
            border-color: #0056b3; /* Cambiar el color del borde al hacer clic */
        }
    </style>
</head>
<body>
    <br><br><br>

    <h1><center>
    <section id="seccionInicio" class="seccion-inicio" style="margin: auto; width: 80%; padding: 20px;">
        <div class="text" style="text-align: center;">
            <p style="font-size: 28px;">REGISTRAR PRODUCTOS QUE SALEN A VENTA</p>
        </div>
    </section>


    <section id="seccionInventario" class="seccion-inventario"> 

    <form action="ventasbd.php" method="POST">


    
        <label for="NumSalida">NumSalida:</label>
        <input type="text" id="NumSalida" name="NumSalida" placeholder="Ingrese el numero de salida" required><br>

        <label for="IDempleado4">IDempleado4:</label>
        <input type="text" id="IDempleado4" name="IDempleado4" placeholder="Codigo empleado" required><br>

        <label for="Codigo_Producto4">Codigo de producto:</label>
        <input type="text" id="Codigo_Producto4" name="Codigo_Producto4" placeholder="Codigo de producto" required><br>

        <label for="Lote_salida">Lote_salida:</label>
        <input type="text" id="Lote_salida" name="Lote_salida" placeholder="Ingrese el número de lote" required><br>

        <label for="Almacen">Almacen:</label>
        <input type="text" id="Almacen" name="Almacen" placeholder="Almacen despacho" required><br>

        <label for="Fecha_In_Inv">Fecha_In_Inv:</label>
        <input type="date" id="Fecha_In_Inv" name="Fecha_In_Inv" required><br>

        <label for="Fecha_salida_stock">Fecha_salida_stock:</label>
        <input type="date" id="Fecha_salida_stock" name="Fecha_salida_stock"><br>

        <label for="Observación">Observación:</label>
        <textarea id="Observación" name="Observación" placeholder="Fecha de Salida"></textarea><br>

        <!-- Botón de envío -->
        <button type="submit" name="ingresar_ventas" class="btn">Guardar</button>
    </form>


    </center>
    </section>
    <br>
    </h1>
</body>
</html>
