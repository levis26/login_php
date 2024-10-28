<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página no encontrada</title>
    <style>
        /* Estilos de reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Fondo de degradado */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4A90E2, #F06EA9);
            color: #FFFFFF;
            text-align: center;
        }

        /* Estilos para el contenedor */
        .container {
            max-width: 600px;
            padding: 20px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 5em;
            margin-bottom: 0.2em;
            color: #FFFFFF;
        }

        p {
            font-size: 1.3em;
            margin-bottom: 1em;
        }

        /* Estilo del botón */
        .btn {
            display: inline-block;
            padding: 12px 25px;
            margin-top: 20px;
            font-size: 1.1em;
            font-weight: bold;
            color: #FFFFFF;
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid #FFFFFF;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .btn:hover {
            background: #FFFFFF;
            color: #4A90E2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <p>Oops! La página que buscas no existe.</p>
        <a href="/" class="btn">Volver a Inicio</a>
    </div>
</body>
</html>
