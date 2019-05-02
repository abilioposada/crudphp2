<?php require_once '../../modelos/Rol.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Roles</title>
</head>
<body>
	<header>
		<h1>Roles</h1>
		<h2>Listar</h2>
	</header>

	<a href="ingresar.php">Ingresar nuevo</a>
	
	<table border="1" collapse	>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th colspan="2">Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach (Rol::listar() as $fila) { ?>
				<tr>
					<td><?= $fila[0] ?></td>
					<td><?= $fila[1] ?></td>
					<td>
						<a href="editar.php?id=<?=base64_encode($fila[0])?>">Editar</a>
					</td>
					<td>
						<a href="../../controladores/Roles.php?a=elim&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>