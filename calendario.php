<?php
include 'library/Calendar.php';
$calendar = new Calendar();
$calendar->add_event('Tarea de John Doe', '2023-04-26', 1, 'green');
$calendar->add_event("Taller de programación WEB CC2", "2023-04-25", 1, "red");

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
	<link rel="stylesheet" href="css/calendar.css">
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
						<a class="nav-link" href="usuarios.php">Usuarios <span>&#128101;</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="seguimiento.php">Seguimiento <span>&#128202;</span> </a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="calendario.php">Calendario <span>&#128198;</span></a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- place navbar here -->
	</header>
	<main>
		<div class="container-fluid">
			<?php echo $calendar; ?>
		</div>
	</main>
	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
	</script>
</body>

</html>