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
                <img width="450px"  src="./img/Cafetería.png" alt="" class="rounded img-fluid">
            </div>
			<div class='container'>

				<form action="Upload.php" method="POST" enctype="multipart/form-data">
                    <div class="col-6 m-auto">
                        <div class="row mt-3">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="date" id="fecha" name="fecha" class="form-control">
                        </div>
                        <div class="row mt-3">
                            <label for="arroz" class="form-label">Arroz</label>
                            <select name="arroz" id="arroz" class="form-select">
                                <option selected>Elija una opción</option>
                                <option value="Arroz Blanco">Arroz Blanco</option>
                                <option value="Arroz Amarillo">Arroz Amarillo</option>
                                <option value="Arroz Mixto">Arroz Mixto</option>
                                <option value="Arroz Pollo">Arroz Pollo</option>
                            </select>
                        </div>
                        <div class="row mt-3">
                            <label for="principio" class="form-label">Principio</label>
                            <select name="principio" id="principio" class="form-select">
                                <option selected>Elija una opción</option>
                                <option value="Frijoles">Frijoles</option>
                                <option value="Lentejas">Lentejas</option>
                                <option value="Pasta">Pasta</option>
                                <option value="Garbanzos">Garbanzo</option>
                            </select>
                        </div>
                        <div class="row mt-3">
                            <label for="proteina" class="form-label">Proteína</label>
                            <select name="proteina" id="proteina" class="form-select">
                                <option selected>Elija una opción</option>
                                <option value="Asada de res">Asada de res</option>
                                <option value="Asada de cerdo">Asada de cerdo</option>
                                <option value="Sudada de res">Sudada de res</option>
                                <option value="Pollo Sudado">Pollo Sudado</option>
                                <option value="Pollo a la plancha">Pollo a la plancha</option>
                                <option value="Chuleta de pollo">Chuleta de pollo</option>
                                <option value="Chuleta de Cerdo">Chuleta de Cerdo</option>
                            </select>
                        </div>
                        <div class="row mt-3">
                            <label for="bebida" class="form-label">Bebida</label>
                            <select name="bebida" id="bebida" class="form-select">
                                <option selected>Elija una opción</option>
                                <option value="Jugo de mora">Jugo de mora</option>
                                <option value="Jugo de maracuyá">Jugo de maracuyá</option>
															<option value="Jugo de guayaba">Jugo de guayaba</option>
                            </select>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="precioInstructor" class="form-label">Precio Instructor</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control" name="precioInstructor" id="precioInstructor">
                                </div>
                            </div>
                            <div class="col">
                                <label for="precioAprendiz" class="form-label">Precio Aprendiz</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control" name="precioAprendiz" id="precioAprendiz">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <button type="submit" value="actualizarMenu" class="btn">Actualizar menú</button>
                        </div>
                    </div>
                </form>
			</div>
		</main>
  </body>
</html>