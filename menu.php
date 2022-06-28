<?php require_once('readFile.php') ?>
<!DOCTYPE html>
<html lang="es">
  <head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<link rel="stylesheet" href="styles.css">
    <title>Menú Virtual Cafetería CDITI</title>
  </head>
  <body>
		<main>
            <div class="text-center">
                <h1>Menú del día</h1>
                <h2>Cafetería CDITI</h2>
								<img width="450px"  src="./img/Cafetería.png" alt="" class="img-fluid">
            </div>
			<div class='container'>

				<form action="Upload.php" method="post" enctype="multipart/form-data">
                    <div class="col-6 m-auto">
                        <div class="row mt-3">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="text" id="fecha" name="fecha" class="form-control" value="<?php echo $file->fecha ?>" readonly>
                        </div>
                        <div class="row mt-3">
                            <label for="arroz" class="form-label">Arroz</label>
														<input type = "text" id="arroz" name = "arroz" class="form-control" value="<?php echo $file->arroz ?>" readonly>
                        </div>
                        <div class="row mt-3">
                            <label for="principio" class="form-label">Principio</label>
                            <input type = "text" id="principio" name = "principio" class="form-control" value="<?php echo $file->principio ?>" readonly>
                        </div>
                        <div class="row mt-3">
                            <label for="proteina" class="form-label">Proteína</label>
                            <input type = "text" id="proteina" name = "proteina" class="form-control" value="<?php echo $file->proteina ?>" readonly>
                        </div>
                        <div class="row mt-3">
                            <label for="bebida" class="form-label">Bebida</label>
                            <input type = "text" id="bebida" name = "bebida" class="form-control" value="<?php echo $file->bebida ?>" readonly>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="precioInstructor" class="form-label">Precio Instructor</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control" name="precioInstructor" id="precioInstructor" value="<?php echo $file->precioInstructor ?>" readonly>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="precioAprendiz" class="form-label">Precio Aprendiz</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control" name="precioAprendiz" id="precioAprendiz" value="<?php echo $file->precioAprendiz ?>" readonly>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form>
			</div>
		</main>
  </body>
</html>