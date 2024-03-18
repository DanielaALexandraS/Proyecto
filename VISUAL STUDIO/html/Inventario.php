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

        /* Estilo para los botones de tipo submit */
        input[type="submit"] {
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

        input[type="submit"]:hover {
            background-color: #0056b3; /* Cambiar el color de fondo al pasar el ratón */
        }

        /* Estilos para los campos de entrada */
        input[type="text"], input[type="date"] {
            width: 60%; /* Ancho del campo de entrada */
            padding: 10px; /* Espaciado interno */
            margin-bottom: 15px; /* Espacio inferior */
            border: 2px solid #007bff; /* Borde */
            border-radius: 20px; /* Borde redondeado */
            box-sizing: border-box; /* Incluir el borde en el ancho total */
            background-color: #f0f0f0; /* Color de fondo */
            color: #333; /* Color del texto */
            font-size: 16px; /* Tamaño del texto */
            outline: none; /* Eliminar el resaltado al hacer clic */
        }

        input[type="text"]:focus, input[type="date"]:focus {
            border-color: #0056b3; /* Cambiar el color del borde al hacer clic */
        }

        /* Estilo para las etiquetas de los campos */
        label {
            margin-bottom: 5px; /* Espacio inferior */
            display: block; /* Para que cada etiqueta esté en una línea diferente */
        }
    </style>
</head>
<body>

<br><br><br>
    <h1><center>
    <section id="seccionInicio" class="seccion-inicio" style="margin: auto; width: 80%; padding: 20px;">
        <div class="text" style="text-align: center;">
            <p style="font-size: 28px;">REGISTRAR PRODUCTOS</p>
        </div>
    </section>

    <section id="seccionInventario" class="seccion-inventario"> 

    <form action="insetF.php" method="POST">

    <br><br>
    
        <label for="Num_inventario">Numero de inventario:</label>
        <input type="text" id="Num_inventario" name="Num_inventario" placeholder="Ingrese el de Inventario" required><br>

        <label for="Id_empleado2">Codigo de empleado:</label>
        <input type="text" id="Id_empleado2" name="Id_empleado2" placeholder="Ingrese el id de empleado" required><br>

        <label for="Lote">Lote:</label>
        <input type="text" id="Lote" name="Lote" placeholder="Ingrese el número de lote" required><br>

        <label for="Cod_producto">Código de Producto:</label>
        <input type="text" id="Cod_producto" name="Cod_producto" placeholder="Ingrese el código del producto" required><br>

        <label for="Fecha_Inv">Fecha de inventario:</label>
        <input type="date" id="Fecha_Inv" name="Fecha_Inv" placeholder="Ingrese la fecha de inventario" required><br>


        <label for="Vencimiento">Fecha de Vencimiento:</label>
        <input type="date" id="Vencimiento" name="Vencimiento" required><br>

        <label for="Fecha_Ingreso_inv">Fecha de Ingreso:</label>
        <input type="date" id="Fecha_Ingreso_inv" name="Fecha_Ingreso_inv" required><br>

        <label for="Observacion">Observación:</label>
        <textarea id="Observacion" name="Observacion" placeholder="Ingrese alguna observación"></textarea><br>

<br><br>
        <!-- Botón de envío -->
        <input type="submit" name="registro_inventario" value="Registrar Inventario">
    
    </form><br><br>


    </div>
   
    </h1>
</body>
</html>
