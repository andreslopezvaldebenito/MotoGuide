<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>MOTO GUIDE Registro</title>
</head>
<body>
    <!-- begin menu -->
    <?php include('./botones/menu.php');?>
    <!-- end menu -->
    
	 <div class="container">
	 <h2 class="mt-5 text-uppercase">Registrar Usuario</h2>
        <form action="./registro.php" method="post">
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" <!--value="<!--?php echo $nombre;?-->">
                </div>
            </div>
			<div class="form-group row">
                <label for="apellidos" class="col-sm-2 col-form-label">Apellidos</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellidos" name="apellidos" <!--value="<!--?php echo $apellidos;?-->">
                </div>
            </div>
			<div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" <!--value="<!--?php echo $email;?-->">
                </div>
            </div>
			<div class="form-group row">
                <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                <div class="col-sm-10">
                    <input type="int" class="form-control" id="telefono" name="telefono" <!--value="<!--?php echo $telefono;?-->">
                </div>
            </div>
			<div class="form-group row">
                <label for="Direccion" class="col-sm-2 col-form-label">Direccion</label>
                <div class="col-sm-10">
                    <input type="int" class="form-control" id="Direccion" name="Direccion" <!--value="<!--?php echo $Direccion;?-->">
                </div>
            </div>
			<div class="form-group row">
                <label for="Ciudad" class="col-sm-2 col-form-label">Ciudad</label>
                <div class="col-sm-10">
                    <input type="int" class="form-control" id="Ciudad" name="Ciudad" <!--value="<!--?php echo $Ciudad;?-->">
                </div>
            </div>
			<div class="form-group row">
                <label for="Nombre de Usuario" class="col-sm-2 col-form-label">Nombre de Usuario</label>
                <div class="col-sm-10">
                    <input type="int" class="form-control" id="Nombre de Usuario" name="Nombre de Usuario" <!--value="<!--?php echo $Nombre de Usuario;?-->">
                </div>
            </div>
			<div class="form-group row">
                <label for="Password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="int" class="form-control" id="Password" name="Password" <!--value="<!--?php echo $Password;?-->">
                </div>
            </div>
			<div class="form-group row">
                <label for="Tienda" class="col-sm-2 col-form-label">Tienda</label>
                <div class="col-sm-10">
                    <input type="int" class="form-control" id="Tienda" name="Tienda" <!--value="<!--?php echo $Tienda;?-->">
                </div>
            </div>
			<div class="form-group row">
                <label for="Cargo" class="col-sm-2 col-form-label">Cargo</label>
                <div class="col-sm-10">
                    <input type="int" class="form-control" id="Cargo" name="Cargo" <!--value="<!--?php echo $Cargo;?-->">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                    <a href="./index.php" class="btn btn-outline-danger">Volver</a>
                </div>
            </div>
        </form>
	</div>
</br></br></br>
	<!-- begin mensaje -->
    <?php include('./botones/submenu.php');?>
    <!-- end mensaje -->

</body>
</html>