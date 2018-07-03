<?php

require('./config/db_connect.php');

if (!empty($_POST)) {
    $conexion = connect();
    /* 
    mysqli_prepare(): prepara una sentencia SQL para su ejecución. Retorna:
        - FALSE si ocurre un error.
        - TRUE si todo ok.
    */
    $sql = 'UPDATE persona SET nombre=?, apellidos=?, email=?, telefono=? WHERE rut=?';
    if ($stmt = mysqli_prepare($conexion, $sql)) {
        $nom_usuario = $_POST['nom_usuario'];
		$email = $_POST['email'];
		$contrasena = $_POST['contrasena'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$direccion = $_POST['direccion'];
		$ciudad = $_POST['ciudad'];
		$telefono = $_POST['telefono'];
		$permiso = $_POST['permiso'];
        # Aqui, se deben agregar las validaciones de los datos.

        /*
        mysqli_stmt_bind_param() agregar variables a una sentencia preparada como parametros.
            - Tipos de datos: {S}tring - {I}nt - {D}ouble.
        */
        mysqli_stmt_bind_param($stmt, 'sssssssis', $nom_usuario, $email, $contrasena, $nombre, $apellidos, $direccion, $ciudad, $telefono, $permiso);

        /*
        # mysqli_stmt_execute() ejecuta la sentencia preparada: 
            - TRUE en caso de éxito o 
            - FALSE en caso de error. 
            - mysqli_stmt_affected_rows() permite determinar el número total de filas afectadas. 
        */
        if (mysqli_stmt_execute($stmt)) {
            # el registro fue editado correctamente
            header("Location: usuario.php?msg=2");
        }

        mysqli_stmt_close($stmt); # cerrar sentencia
    }
    mysqli_close($conexion);

} elseif (!empty($_GET['nom_usuario'])) {
    $conexion = connect();
    $sql = 'SELECT * FROM usuarios WHERE nom_usuario=?';
    
    # inicializa  una sentencia y devuelve un objeto para usarlo con mysqli_stmt_prepare()
    $stmt = mysqli_stmt_init($conexion);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        
        # vincular parametros
        mysqli_stmt_bind_param($stmt, 'i', $_GET['nom_usuario']);

        # ejecutar consulta
        if (mysqli_stmt_execute($stmt)) {

            # vincular variables de resultados
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_array($result);
            $nom_usuario = $_POST['nom_usuario'];
			$email = $_POST['email'];
			$contrasena = $_POST['contrasena'];
			$nombre = $_POST['nombre'];
			$apellidos = $_POST['apellidos'];
			$direccion = $_POST['direccion'];
			$ciudad = $_POST['ciudad'];
			$telefono = $_POST['telefono'];
			$permiso = $_POST['permiso'];
            $msg = '';
        }
        mysqli_stmt_close($stmt); # cerrar sentencia
    }
    mysqli_close($conexion); # cerrar la conexion
} else {
    $nom_usuario = '';
    $email = '';
    $contrasena = '';
    $nombre = '';
    $apellidos = '';
    $direccion = '';
	$ciudad = '';
	$telefono = '';
	$permiso = '';
    $msg = '';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>MOTO GUIDE Editar usuario</title>
</head>
<body>
    <!-- begin menu -->
    <?php include('./botones/menu3.php');?>
    <!-- end menu -->
    
    <div class="container">
        <h2 class="mt-5 text-uppercase">Editar</h2>

        <?php echo $msg; ?>

        <form action="./editar.php" method="post">
            <div class="form-group row">
                <label for="nom_usuario" class="col-sm-2 col-form-label">Nombre de Usuario</label>
                <div class="col-sm-10">
					<input type="text" class="form-control" id="nom_usuario" name="nom_usuario" value="<?php echo $nom_usuario;?>">
                </div>
            </div>
			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="contrasena" class="col-sm-2 col-form-label">Contraseña</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="contrasena" name="contrasena" value="<?php echo $contrasena;?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre;?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="apellidos" class="col-sm-2 col-form-label">Apellidos</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $apellidos;?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="direccion" class="col-sm-2 col-form-label">Direccion</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $direccion;?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="ciudad" class="col-sm-2 col-form-label">Ciudad</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="ciudad" name="ciudad" value="<?php echo $ciudad;?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
				<div class="col-sm-10">
					<input type="id" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono;?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="permiso" class="col-sm-2 col-form-label">Permiso</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="permiso" name="permiso" value="<?php echo $permiso;?>">
				</div>
			</div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                    <a href="./usuario.php" class="btn btn-outline-danger">Cancelar</a>
                </div>
            </div>
        </form>     
    </div>

    
</body>
</html>