<?php
    include('../config/config.php');
    include('../config/Database.php');
    //include('../Productos/menuProducto.php');
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Registro</title>
	<link rel="stylesheet" type="text/css" href="../css/Registro.css">
</head>
<body>
<?php include('../Productos/menuProducto.php'); ?>
	<form>
		<h2>Registro Usuarios</h2>
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required>

		<label for="apellido">Apellido:</label>
		<input type="text" id="apellido" name="apellido" required>

		<label for="correo">Correo electrónico:</label>
		<input type="email" id="correo" name="correo" required>

		<label for="contrasena">Contraseña:</label>
		<input type="password" id="contrasena" name="contrasena" required>

		<label for="confirmar-contrasena">Confirmar contraseña:</label>
		<input type="password" id="confirmar-contrasena" name="confirmar-contrasena" required>

		<label for="direccion">Dirección:</label>
		<input type="text" id="direccion" name="direccion" required>

		<label for="ciudad">Ciudad:</label>
		<input type="text" id="ciudad" name="ciudad" required>

		<label for="estado">Estado:</label>
		<select id="estado" name="estado" required>
			<option value="">Seleccione una opción</option>
			<option value="BO">Bogota</option>
			<option value="CL">Cali</option>
			<option value="MD">Medellin</option>
			<option value="CT">Cartagena</option>
		</select>

		<label for="codigo-postal">Código postal:</label>
		<input type="text" id="codigo-postal" name="codigo-postal" required>

		<button type="submit">Registrarse</button>
	</form>
</body>
</html>
