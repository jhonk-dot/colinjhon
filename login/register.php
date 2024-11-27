<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = htmlspecialchars($_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
$stmt = $conn->prepare($sql);
if ($stmt->execute(['username' => $username, 'password' => $password])) {
echo "Registro exitoso. <a href='login.php'>Iniciar sesión</a>";
} else {
echo "Error al registrar.";
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<title>Registro</title>
<link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="caja">
<h2>Registro de usuario</h2>
<form action="register.php" method="post">
<label for="username">Usuario:</label>
<input type="text" name="username" required><br>
<label for="password">Contraseña:</label>
<input type="password" name="password" required><br>
<button type="submit">Registrarse</button>
</form>
<a href="login.php" style="text-decoration:none; color:white; margin-left: 90px; padding-top:20px;">Iniciar sesion</a>
</div>
</body>
</html>