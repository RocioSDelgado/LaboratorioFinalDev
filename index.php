<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Unforgiven new collection</title>
<link rel="stylesheet" type="text/css" href="css/estilosindexphp.css">
<link rel="shortcut icon" href="CSS/icon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Overpass:wght@400;594&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
    <a href="index.html" onclick="window.location.href='index.html'">
    <img src="CSS/LE_SSERAFIM_logo2.png" alt="LE SSERAFIM">
</a>
        <nav class="header-menu">
          <ul>
            <li>New collection</li>
          </ul>
        </nav>
        <div class="header-actions">
          <a href="#" onclick="window.location.href='index.html'"><b>Inicio</b></a>
          <a href="#" onclick="window.location.href='consulta.php'">Consulta</a>
        </div>
    </header>
    
    
<?php
if ($_POST) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $apellido2 = $_POST["apellido2"];
    $email = $_POST["email"];
    $login = $_POST["login"];
    $password = $_POST["password"];

    $errors = [];

    if (empty($nombre)) {
        $errors[] = "<span class='error'>El campo Nombre es obligatorio.</span>";
    }

    if (empty($apellido)) {
        $errors[] = "<span class='error'>El campo Primer apellido es obligatorio.</span>";
    }

    if (empty($apellido2)) {
        $errors[] = "<span class='error'>El campo Segundo apellido es obligatorio.</span>";
    }

    if (empty($email)) {
        $errors[] = "<span class='error'>El campo Email es obligatorio.</span>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "<span class='error'>El campo Email no tiene un formato válido.</span>";
    }

    if (empty($login)) {
        $errors[] = "<span class='error'>El campo Nombre de usuario es obligatorio.</span>";
    }

    if (empty($password)) {
        $errors[] = "<span class='error'>El campo Contraseña es obligatorio.</span>";
    } elseif (strlen($password) < 4 || strlen($password) > 8) {
        $errors[] = "<span class='error'>La contraseña debe tener entre 4 y 8 caracteres.</span>";
    }

    if (empty($errors)) {
        $servername = "localhost";
        $username = "root";
        $dbpassword = "";
        $dbname = "CursoSQL";

        $conn = new mysqli($servername, $username, $dbpassword, $dbname);

        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }

        $emailExists = false;
        $emailCheckQuery = "SELECT * FROM USUARIA WHERE email='$email'";
        $result = $conn->query($emailCheckQuery);

        if ($result->num_rows > 0) {
            $emailExists = true;
        }

        if ($emailExists) {
            echo "<span class='error'>El correo electrónico ya está registrado.</span>";
            echo '<a href="consulta.php"><button class="button">Consultar</button></a>';
        } else {
            $insertQuery = "INSERT INTO USUARIA (nombre, apellido, apellido2, email, login, password)
            VALUES ('$nombre', '$apellido', '$apellido2', '$email', '$login', '$password')";

            if ($conn->query($insertQuery) === TRUE) {
                echo "<span class='success'>Registro completado con éxito.</span>";
                echo '<a href="consulta.php"><button class="button">Consultar</button></a>';
            } else {
                echo "<span class='error'>Error: " . $insertQuery . "<br>" . $conn->error . "</span>";
            }
        }

        $conn->close();
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
</body>
</html>