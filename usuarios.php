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
						<a class="nav-link" href="tareas.php" aria-current="page">Tareas <span>&#128209;</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="usuarios.php">Usuarios <span>&#128101;</span></a>
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
							<label for="nombre" class="form-label">Nombre (s):</label>
							<input type="text" class="form-control" id="nombre" placeholder="Nombre (s)" name="nombre">
						</div>
						<div class="mb-3 mt-3">
							<label for="apellido_paterno" class="form-label">Apellido paterno:</label>
							<input type="text" class="form-control" id="apellido_paterno" placeholder="Apellido paterno" name="apellido_paterno">
						</div>
						<div class="mb-3 mt-3">
							<label for="apellido_materno" class="form-label">Apellido materno:</label>
							<input type="text" class="form-control" id="apellido_materno" placeholder="Apellido materno" name="apellido_materno">
						</div>
						<div class="mb-3">
							<label for="email" class="form-label">Correo:</label>
							<input type="email" class="form-control" id="email" placeholder="Correo electrónico" name="email">
						</div>
						<div class="text-center">
							<button type="button" class="btn btn-primary">Agregar usuario</button>
						</div>
					</form>
				</div>
				<div class="col">
					<div class="table-responsive mt-5">
						<table class="table table-primary">
							<thead>
								<tr>
									<th scope="col">Nombre (s)</th>
									<th scope="col">E-mail</th>
								</tr>
							</thead>
							<tbody id="tbody_usuarios">
								<tr>
									<td scope="row">Jhon Doe</td>
									<td>email@domain.ext</td>
								</tr>
								<?php
								$sql = "SELECT * FROM usuarios LIMIT 150";
								$taskio = $pdo->prepare($sql);
								$taskio->execute();
								while ($fila = $taskio->fetch()) {
								?>
									<tr>
										<td scope="row"><?= $fila["nombre"] ?></td>
										<td><?= $fila["correo_electronico"] ?></td>
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