<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <?php
    include("con_db.php");

    $servername = "localhost";
    $database = "aiep2";
    $username = "admin";
    $password = "admin";

    // Crear conexión
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Verificar conexión
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM aiep";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>ID Alumno</th>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>Teléfono</th>";
        echo "<th>dirección</th>";
        echo "<th>RUT</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['idAlumno'] . "</td>";
            echo "<td>" . $row['Nombre'] . "</td>";
            echo "<td>" . $row['Apellido'] . "</td>";
            echo "<td>" . $row['Telefono'] . "</td>";
            echo "<td>" . $row['direccion'] . "</td>";
            echo "<td>" . $row['Rut'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }

    mysqli_close($conn);
    ?>
</body>
</html>

