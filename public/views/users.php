<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <style>
        /* Estilo general para el fondo degradado */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #40e0d0, #ff8c00, #ffd700);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        /* Contenedor principal de la lista de usuarios */
        .user-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 90%;
            text-align: center;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
        }

        /* Estilo de los elementos de usuario */
        .user {
            background: linear-gradient(45deg, #00b3b3, #ffd700);
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
            color: #fff;
            font-weight: bold;
            transition: transform 0.2s;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .user:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>

    <div class="user-container">
        <h1>Lista de Usuarios</h1>
        <?php
        // Ejemplo de un array de usuarios para mostrar en la lista
        $users = ["Ana López", "Carlos Pérez", "María García", "Luis Gómez", "Carmen Díaz"];

        foreach ($users as $user) {
            echo "<div class='user'>$user</div>";
        }
        ?>
    </div>

</body>
</html>
