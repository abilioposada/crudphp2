<?php
	require_once '../../modelos/Rol.php';
	$rol = Rol::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Roles</title>
</head>
<body>
	<form action="../../controladores/Roles.php" method="post">
		<input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
		<input name="nombre" placeholder="Nombre" value="<?= $rol[1] ?>" required autofocus />
		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>