<?php
session_start();
if (!isset($_SESSION['username'])) {
header("Location: login.php");
exit();
}
echo "Bienvenido, " . $_SESSION['username'] . "!";
?>
<html>
	<head>
		<title>expreso s</title>
		<meta charset="UTF-8" />
	</head>
	<body>
    <h1>¡Hola, <?php echo $_SESSION['username']; ?>!</h1>


		<form action = "recoger2.php" method="post">			
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
				<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
				<path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
			  </svg>

			<label>Digite su Nombre y apellidos</label>
			
			<input type="text" name="nombre" size="20"  placeholder="Digite nombre" /><br/><br>

			<label>Digite su Edad</label><input type="number" name="Edad" min="1" max="90" required placeholder="Edad" /><br/><br>

			<label>Seleccione fecha de viaje </label><input type="date" name="Fecha" required/><br/><br>

			<label for="VIP">Es usted un cliente vip ?</label><br/>

			<input type="radio" name="VIP" value="si">Si<br/>

			<input type="radio" name="VIP" value="no">No<br/><br/>

                        <label>Direccion de residencia</label>

			<input type="text" name="Direccion" size="30"  placeholder="Digite direccion" /><br/><br>

            <label>Seleccione Ciudad Destino</label><br/>
			<select name="Provincia">
				<option>Madrid</option>
				<option>Sevilla</option>
				<option>Bilbao</option>
				<option>Barcelona</option>
			</select>

			<br> <br>
			<input type="submit" value="Enviar" />
		</form>
        <a href="logout.php">Cerrar sesión</a>
	</body>
</html>









