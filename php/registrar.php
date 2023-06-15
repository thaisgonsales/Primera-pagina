<!DOCTYPE html>	
<html>
	<body>
								        
	    <?php

        include("con_db.php");


			 $nombre = $_POST['nombre'];
			 $apellido = $_POST['apellido'];
			 $telefono = $_POST['telefono'];
			 $direccion = $_POST['direccion'];
			 $rut = $_POST['rut'];
             
             $servername = "localhost";
             $database = "aiep2";
             $username = "admin";
             $password = "admin";
			 // Create connection
			 $conn = mysqli_connect($servername, $username, $password, $database);
			 // Check connection
			if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			}
			$sql = "INSERT INTO aiep(nombre, apellido, telefono, direccion, rut) VALUES ('$nombre','$apellido','$telefono','$direccion','$rut')";
			if (mysqli_query($conn, $sql)) {
			echo "Nuevo registro existosamente creado";
			} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			//echo "Connected successfully";
			mysqli_close($conn);
		?>
								        
	</body>
</html>
