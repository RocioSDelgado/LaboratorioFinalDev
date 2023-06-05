<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Unforgiven new collection</title>
<link rel="stylesheet" type="text/css" href="css/Consultaphp.css">
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CursoSQL";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

$sql = "SELECT * FROM USUARIA";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='container'>";
    echo "<table class='usuarios-table'>";
    echo "<tr><th colspan='6'>Lista de usuarios registrados</th></tr>
    <tr><th>ID</th><th>Nombre</th><th>Primer apellido</th><th>Segundo apellido</th><th>Email</th><th>Nombre de usuario</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["ID"] . "</td>";
    echo "<td>" . $row["nombre"] . "</td>";
    echo "<td>" . $row["apellido"] . "</td>";
    echo "<td>" . $row["apellido2"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["login"] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='index.html' class='volver-btn'>Inicio</a>";
echo "</div>";

} else {
    echo "No hay usuarios registrados.";
}

$conn->close();
?>

</body>
</html>