<?php
include_once("library/conexion.php");
?>
<!doctype html>
<html lang="es">

<head>
	<title>Taskio</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS v5.2.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="shortcut icon" href="img/programar-16px.ico" type="image/x-icon">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="js/taskio.js"></script>
</head>

<body style="background-image: url(img/bg.jpg);">
	<header>
		<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
			<a class="navbar-brand" href="index.php">Menu principal <span>&#127915;</span></a>
			<button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
			<div class="collapse navbar-collapse" id="collapsibleNavId">
				<ul class="navbar-nav me-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link active" href="tareas.php" aria-current="page">Tareas <span>&#128209;</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="usuarios.php">Usuarios <span>&#128101;</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="seguimiento.php">Seguimiento <span>&#128202;</span> </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="calendario.php">Calendario <span>&#128198;</span></a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- place navbar here -->
	</header>
	<main>
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<form>
						<div class="mb-3 mt-3">
							<label for="tarea" class="form-label">Tarea:</label>
							<input type="tarea" class="form-control" id="tarea" placeholder="Ingresa la tarea" name="tarea">
						</div>

						<div class="mb-3">
							<label for="descripcion" class="form-label">Descripción:</label>
							<textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Ingresa la descripción de la tarea"></textarea>
						</div>

						<div class="mb-3">
							<label for="prioridad" class="form-label">Elige la prioridad</label>
							<select class="form-select form-select-sm" name="prioridad" id="prioridad">
								<option value="ALTA" selected>Alta</option>
								<option value="MEDIA">Media</option>
								<option value="BAJA">Baja</option>
							</select>
						</div>
						<div class="mb-3">
							<label for="fecha_entrega" class="form-label">Fecha de entrega:</label>
							<input type="date" class="form-control" id="fecha_entrega" placeholder="Elige la fecha de entrega" name="fecha_entrega">
						</div>
						<div class="mb-3">
							<label for="responsable" class="form-label">Selecciona al responsable</label>
							<select class="form-select form-select-sm" name="responsable" id="responsable">
								<option value="">John Doe (Selecciona un usuario real)</option>
								<?php
								$sql = "SELECT * FROM usuarios";
								$taskio = $pdo->prepare($sql);
								$taskio->execute();
								while ($usuario = $taskio->fetch()) {
								?>
								<option value="<?= $usuario['id'] ?>"><?= $usuario['nombre'] ?></option>
								<?php
								}
								?>
							</select>
						</div>
						<div class="text-center">
							<button type="button" class="btn btn-primary" onclick="AgregarTarea()">Agregar tarea</button>
						</div>
					</form>
				</div>
				<div class="col">
					<div class="table-responsive mt-5">
						<table class="table table-primary">
							<thead>
								<tr>
									<th scope="col">Tarea</th>
									<th scope="col">Prioridad</th>
									<th scope="col">Fecha de entrega</th>
									<th scope="col">Responsable</th>
								</tr>
							</thead>
							<tbody id="tbody_tareas">
								<tr>
									<td scope="row">Ejemplo 1</td>
									<td>✅ Baja ❕ Media ❗ Alta</td>
									<td>2023-04-2023</td>
									<td>Jhon Doe</td>
								</tr>
								<?php
								$sql = "SELECT * FROM tareas LIMIT 150";
								$taskio = $pdo->prepare($sql);
								$taskio->execute();
								while ($fila = $taskio->fetch()) {
									$id_responsable = $fila["id_responsable"];
									$sql = "SELECT * FROM usuarios WHERE id = {$id_responsable}";
									$taskio_responsable = $pdo->prepare($sql);
									$taskio_responsable->execute();
									$responsable = $taskio_responsable->fetch();
								?>
									<tr>
										<td scope="row"><?= $fila['nombre'] ?></td>
										<td class="text-center">
											<?php
											if ($fila["prioridad"] == "ALTA") {
												echo "&#10071;";
											} else if ($fila["prioridad"] == "MEDIA") {
												echo "&#10069;";
											} else {
												echo "&#9989;";
											}
											?>
										</td>
										<td><?= $fila['fecha_entrega'] ?></td>
										<td><?= $responsable["nombre"] ?></td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
	</script>
</body>

</html>