<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #0d1b2a, #c0c0c0); /* Degradado azul oscuro a plata */
            color: #ffffff;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            text-align: left;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ffffff;
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.2);
            color: #ffffff;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #1f4287;
            border: none;
            border-radius: 4px;
            color: #ffffff;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2780e3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>

        <form action="login.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" value="Send">
        </form>

        <?php
        // Ejemplo de hash para la contraseña ingresada
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
            $hash = hash('SHA512', $password);
            echo "<p>Hash generado: $hash</p>";
        }
        ?>
    </div>
</body>
</html>
