<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="styleprod2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* Estilo para el contenedor de los botones */
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
    </style>
</head>
<body>

<br><br><br>
    <h1><center>
    <section id="seccionInicio" class="seccion-inicio" style="margin: auto; width: 70%; padding: 20px;">
        <div class="text" style="text-align: center;">
            <p style="font-size: 38px;">REGISTRAR USUARIO</p>
        </div>
    </section>

    <br><br><br><br>

    <section id="seccionInventario" class="seccion-inventario"> 

    <form id="formularioUsuario" action="insetF.php" method="POST">
    
        <label for="Nombre_completo">Nombre_completo</label>
        <input type="text" id="Nombre_completo" name="Nombre_completo" placeholder="Nombre completo" required><br>

        <label for="Usuario">Usuario</label>
        <input type="text" id="Usuario" name="Usuario" placeholder="Ingrese su documento" required><br>

        <label for="Contraseña">Contraseña</label>
        <input type="text" id="Contraseña" name="Contraseña" placeholder="Contraseña" required><br>

        <label for="Correo">Correo</label>
        <input type="text" id="Correo" name="Correo" placeholder="Ingrese su correo" required><br>

        <label for="Fecha_Ingreso">Fecha de Ingreso:</label>
        <input type="date" id="Fecha_Ingreso" name="Fecha_Ingreso" required><br>

        <!-- Botón de envío -->
        <button type="submit" name="ingresar_usuario" form="formularioUsuario" class="btn">Registrar</button> <!-- Botón de tipo "submit" pero con estilo personalizado -->
    </form>
    </section>

    </h1>
</html>
