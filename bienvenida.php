<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:crimson;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .welcome-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 90%;
        }

        h1 {
            color: #333;
            margin-bottom: 1rem;
        }

        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color:brown;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            transition: background 0.3s;
        }

        .logout-btn:hover {
            background-color:red;
        }
        
        .logout-btn1 {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            transition: background 0.3s;
        }

        .logout-btn1:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>¡Bienvenido/a <img src="images/grinch.gif" style="width: 300px;" alt=""> <br>  <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p style="text-align: center;"> Se que estoy lejos y quizas tal vez no pueda estar con tigo por eso mismo 
            prepare algo para ti aun que  sea a la distancia tenia planeado hacer algo diferente 
            pero por  la logistica no pude dar con algo cerca a ti de ese modo tengo algo preparado para ti ......

            Espero te guste ..... no te rias vamos aprendiendo poco a poco mas y mas .... pronto sera mas bonito jejjee
            
            Te deje aqui una Carta Pensada en ti <?php echo htmlspecialchars($_SESSION['username']); ?>
        </p>

        <a href="cartaNavidad.html" class="logout-btn1"> Ver Carta </a>
        <a href="logout.php" class="logout-btn">Cerrar Sesión</a>

    </div>
</body>
</html>