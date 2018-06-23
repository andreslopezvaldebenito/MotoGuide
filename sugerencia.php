<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>MOTO GUIDE Sugerencia</title>
</head>
<body>
    <!-- begin menu -->
    <?php include('./botones/menu.php');?>
    <!-- end menu -->
    
	 <div class="container">
	 <h2 class="mt-5 text-uppercase">Sugerencias y/o Reclamos</h2>
        <form action="./sugerencia.php" method="post">
			<div class="form-group">
				<textarea type="text" placeholder="Indiquenos su sugerencia y/o reclamo" maxlength="400" id="motivo" rows="5" class="col-lg-offset-1 col-lg-10"></textarea>
			</div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-outline-primary">Enviar</button>
                    <a href="./index.php" class="btn btn-outline-danger">Volver</a>
                </div>
            </div>
        </form>




</body>
</html>