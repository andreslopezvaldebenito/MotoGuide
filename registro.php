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
	 <h2 class="mt-5 text-uppercase">Registro Usuario</h2>
        <form action="./registro.php" method="post">
            <div class="form-group row">
                <label for="Nombre de Usuario" class="col-sm-2 col-form-label">Nombre de Usuario</label>
                <div class="col-sm-10">
                    <input type="int" class="form-control" id="Nombre de Usuario" name="Nombre de Usuario" <!--value="<!--?php echo $Nombre de Usuario;?-->">
                </div>
            </div>
			<div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" <!--value="<!--?php echo $email;?-->">
                </div>
            </div>
			<div class="form-group row">
                <label for="Password" class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="Password" name="Password" <!--value="<!--?php echo $Password;?-->">
                </div>
            </div>
			<div class="form-group row">
                <label for="Password" class="col-sm-2 col-form-label">Repita Contraseña</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="Password" name="Password" <!--value="<!--?php echo $Password;?-->">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <a href="./registro2.php" class="btn btn-outline-primary">Siguiente</a>
                    <a href="./index.php" class="btn btn-outline-danger">Volver</a>
                </div>
            </div>
        </form>
	</div>
</body>
</html>