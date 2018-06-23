<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>MOTO GUIDE Busqueda avanzada</title>
</head>
<body>
    <!-- begin menu -->
    <?php include('./botones/menu.php');?>
    <!-- end menu -->
    
	<div class="container">
	 <h2 class="mt-5 text-uppercase">Busqueda Avanzada</h2>
        <form action="./busqueda.php" method="post">
            <div class="form-group row">
                <label for="tipo" class="col-sm-2 col-form-label">Tipo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tipo" name="tipo" <!--value="<!--?php echo $tipo;?-->">
                </div>
            </div>
            <div class="form-group row">
                <label for="marca" class="col-sm-2 col-form-label">Marca</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="marca" name="marca" <!--value="<!--?php echo $marca;?-->">
                </div>
            </div>
            <div class="form-group row">
                <label for="modelo" class="col-sm-2 col-form-label">Modelo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="modelo" name="modelo" <!--value="<!--?php echo $modelo;?-->">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-outline-primary">Buscar</button>
                    <a href="./index.php" class="btn btn-outline-danger">Volver</a>
                </div>
            </div>
        </form>
</br></br></br>
	<!-- begin mensaje -->
    <?php include('./botones/mensaje.php');?>
    <!-- end mensaje -->


</body>
</html>