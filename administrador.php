<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>MOTO GUIDE Administrador</title>
</head>
<body>
    <!-- begin menu -->
    <?php include('./botones/menu2.php');?>
    <!-- end menu -->
    
	 <div class="container">
	 <h2 class="mt-5 text-uppercase">Administrador</h2>
        <form action="./administrador.php" method="post">
			<div class="form-group row">
                <a class="navbar-brand" href="./producto.php">Administrar Producto</a>
            </div>
			<div class="form-group row">
                <a class="navbar-brand" href="./tienda.php">Administrar Tiendas</a>
            </div>
			<div class="form-group row">
                <a class="navbar-brand" href="./usuario.php">Administrar Usuarios</a>
            </div>
            <div class="form-group row">
                <a class="navbar-brand" href="./revision.php">Administrar Mensajes</a>
            </div>
        </form>
	</div>

</body>
</html>