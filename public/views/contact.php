<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <style>
        /* Estilos generales */
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            height: 100vh;
            background: linear-gradient(135deg, #6a0dad, #00c6ff); /* Degradado morado a celeste */
            color: #fff;
        }

        /* Contenedor del formulario */
        .contact-container {
            background: rgba(255, 255, 255, 0.1); /* Fondo transparente */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 400px;
        }

        .contact-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        /* Campos del formulario */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 14px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            background: rgba(255, 255, 255, 0.8);
            color: #333;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
        }

        /* Botón de envío */
        .btn-submit {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            border: none;
            border-radius: 8px;
            background: #00c6ff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-submit:hover {
            background: #0099cc;
        }

        /* Efecto de sombra en el formulario */
        .contact-container:hover {
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div class="contact-container">
        <h2>Contacto</h2>
        <form action="submit_contact.php" method="POST">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Enviar Mensaje</button>
        </form>
    </div>
</body>
</html>
