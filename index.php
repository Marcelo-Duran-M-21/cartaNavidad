<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: green;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .btn-login {
            width: 100%;
            padding: 0.8rem;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-login:hover {
            background: #45a049;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div style="text-align: center;"><img src="images/pinguino.gif" alt="" style="width:150px ;"></div>
        
        <h2>Inicia seccion con los datos Proporcionados</h2>
        <?php
        session_start();
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            // Usuarios válidos
            $valid_users = array(
                'Matilde' => '6547',
                'Erlinda' => '6547',
                'Ronald' => '6547',
                'Doroty' => '6547',
                'Jeny' => '6547',
                'Soledad' => '6547'
                
            );
            
            if (isset($valid_users[$username]) && $valid_users[$username] === $password) {
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("Location: bienvenida.php");
                exit;
            } else {
                echo '<p class="error-message">Usuario o contraseña incorrectos</p>';
            }
        }
        ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-login">Iniciar Sesión</button>
        
        </form>
    </div>
</body>
</html>