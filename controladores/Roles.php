<?php require_once '../modelos/Rol.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	$rol = new Rol();

	switch ($accion) {
		case 'Ingresar':
			$rol->nombre = $_POST['nombre'];
			$rol->ingresar();
			break;
		case 'Editar':
			$rol->id= base64_decode($_POST['id']);
			$rol->nombre = $_POST['nombre'];
			$rol->editar();
			break;
		case 'elim':
			$rol->id = base64_decode($_GET['id']);
			$rol->eliminar();
			break;
	}
}

header('Location: ../vistas/roles');