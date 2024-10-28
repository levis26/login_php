<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <style>
        /* Fondo con degradado */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #00c853, #ffeb3b);
            color: #333;
        }

        /* Contenedor principal */
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 600px;
        }

        /* Título estilizado */
        h1 {
            font-size: 2.5rem;
            color: #388e3c;
            margin-bottom: 1rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        /* Texto de bienvenida */
        p {
            font-size: 1.2rem;
            color: #616161;
            margin-bottom: 2rem;
        }

        /* Botón interactivo */
        .btn {
            font-size: 1rem;
            padding: 0.8rem 1.5rem;
            color: #ffffff;
            background: #00c853;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
            text-transform: uppercase;
        }

        /* Efecto hover en el botón */
        .btn:hover {
            background: #ffeb3b;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenidos a Proyecto Login</h1>
        <p>Para un logueado seguro</p>
        <button class="btn" onclick="location.href='/login'">Ir a login</button>
    </div>
</body>
</html>
