<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROYECTO2</title>
    <link rel="stylesheet" href="styleprod2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* Estilo para el contenedor del formulario */
        #formularioContainer {
            margin-top: 20px;
        }
        /* Estilo para la imagen de inicio */
        .home img {
            width: 100%;
            height: auto; /* Ajustar la altura automáticamente */
        }
        /* Estilo para el botón "Inicio" */
        .btn-inicio {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-inicio:hover {
            background-color: #0056b3;
        }
    </style>
    <!-- Script para cargar formularios PHP dinámicamente -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            mostrarFormulario('Inicio');
        });

        function mostrarFormulario(formulario) {
            // Limpiar el contenido actual del contenedor
            document.getElementById('formularioContainer').innerHTML = '';

            // Si el formulario seleccionado es 'Inicio', mostrar la imagen
            if (formulario === 'Inicio') {
                document.getElementById('formularioContainer').innerHTML = '<img src="Imagenesproyecto/in.jpg" alt="Imagen de inicio">';
            } else {
                // Si se selecciona cualquier otro formulario, cargar el formulario correspondiente
                fetch(formulario + '.php')
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById('formularioContainer').innerHTML = data;
                    })
                    .catch(error => {
                        console.error('Error al cargar el formulario:', error);
                    });
            }
        }
    </script>
</head>
<body>

<nav class="sidebar close">
    <header>
        <div class="text logo">
            <span class="name">Control</span>
            <span class="profe">Inventario</span>
        </div>
        <i class="bx bx-menu toggle"></i>
    </header>

    <div class="menu-bar">
        <div class="menu">
            <li class="search-box">
                <i class="bx bx-search icon"></i>
                <input type="text" placeholder="Buscar....">
            </li>
            <ul class="menu-links">
                <li class="nav-link" id="InventarioLink">
                    <a href="#" onclick="mostrarFormulario('Inventario')">
                        <i class="bx bx-bell icon"></i>
                        <span class="text nav-text">Inventario</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#" onclick="mostrarFormulario('Usuarios')">
                        <i class="bx bx-pie-chart-alt icon"></i>
                        <span class="text nav-text">Usuarios</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#" onclick="mostrarFormulario('Ventas')">
                        <i class="bx bx-wallet icon"></i>
                        <span class="text nav-text">Ventas</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="botton-content">
            <li class="">
                <a href="PROYECTO.php">
                    <i class="bx bx-log-out icon"></i>  
                    <span class="text nav-text ">Salir</span>
                </a>
            </li>
            <li class="mode">
                <div class="sun-moon">
                    <i class="bx bx-moon icon moon"></i>
                    <i class="bx bx-sun icon sun"></i>
                </div>
                <span class="mode-text text">Modo Oscuro</span>
                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
        </div>
    </div> 
</nav> 

<br><br><br><br><br><br>

<section class="home">
    <div id="formularioContainer"></div> <!-- Contenedor del formulario -->
    <a href="#" class="btn-inicio" onclick="mostrarFormulario('Inicio')">Inicio</a>
</section>

<script src="prod2.js"></script>
</body>
</html>
