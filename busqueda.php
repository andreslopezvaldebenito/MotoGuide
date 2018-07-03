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
    <?php include('./botones/menu2.php');?>
    <!-- end menu -->
    
	<div class="container">
	 <h2 class="mt-5 text-uppercase">Busqueda Avanzada</h2>
        <form action="./busqueda.php" method="post">
			<div class="form-group row">
				<label for="documentacion" class="col-sm-2 col-form-label">Seleccione busqueda</label>
					<div class="col-sm-10">
						<select name="documentacion" id="documentacion" class="form-control">
							<option value="ninguno">Ninguno</option>
							<option value="motos">Motos</option>
							<option value="accesorios">Accesorios</option>
							<option value="talleres">Talleres</option>	
							<option value="repuestos">Repuestos</option>	
						</select>
					</div>	
			</div>
            <div class="form-group row">
                <label for="tipo" class="col-sm-2 col-form-label">Tipo</label>
					<div class="col-sm-10">
						<select name="documentacion" id="documentacion" class="form-control">
							<option value="ninguno">Ninguno</option>
							<option value="pista">Pista</option>
							<option value="shopper">Shopper</option>
							<option value="enduro">Enduro</option>	
							<option value="urbana">Urbana</option>
							<option value="electrica">Electrica</option>	
						</select>
					</div>
            </div>
            <div class="form-group row">
                <label for="marca" class="col-sm-2 col-form-label">Marca</label>
					<div class="col-sm-10">
						<select name="documentacion" id="documentacion" class="form-control">
							<option value="ninguno">Ninguno</option>
							<option value="suzuki">Suzuki</option>
							<option value="yamaha">Yamaha</option>
							<option value="takasaki">Takasaki</option>	
							<option value="bmw">BMW</option>	
							<option value="honda">Honda</option>	
						</select>
					</div>
            </div>
			<div class="form-group row">
                <label for="modelo" class="col-sm-2 col-form-label">Modelo</label>
					<div class="col-sm-10">
						<select name="documentacion" id="documentacion" class="form-control">
							<option value="ninguno">Ninguno</option>
							<option value="asd1">ASD1</option>
							<option value="asd2">ASD2</option>
							<option value="asd3">ASD3</option>	
							<option value="asd4">ASD4</option>	
						</select>
					</div>
            </div>
            <div class="form-group row">
                <label for="otro" class="col-sm-2 col-form-label">Otro</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="otro" name="otro" <!--value="<!--?php echo $otro;?-->">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-outline-primary">Buscar</button>
                    <button type="submit" class="btn btn-outline-danger">Limpiar</button>
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