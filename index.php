<!doctype html>
<html lang="es">

<head>
	<title>Taskio</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS v5.2.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="product.css">
	<link rel="shortcut icon" href="img/programar-16px.ico" type="image/x-icon">
</head>

<style>
	.bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		user-select: none;
	}

	@media (min-width: 768px) {
		.bd-placeholder-img-lg {
			font-size: 3.5rem;
		}
	}
</style>

<body style="background-image: url(img/bg.jpg);">
	<header>
		<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
			<a class="navbar-brand active" href="index.php">Menu principal <span>&#127915;</span></a>
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
						<a class="nav-link" href="calendario.php">Calendario <span>&#128198;</span></a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- place navbar here -->
	</header>
	<main>
		<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
			<div class="col-md-5 p-lg-5 mx-auto my-5">
				<h1 class="display-4 fw-normal">Taskio <img src="img/programar-64px.png" alt="Logo"> </h1>
				<p class="lead fw-normal">Una plataforma para crear tareas y asignarlas a otros usuarios, establecer plazos y hacer un seguimiento del progreso. </p>
				<a class="btn btn-outline-secondary" href="tareas.php">Iniciar</a>
			</div>
			<div class="product-device shadow-sm d-none d-md-block"></div>
			<div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
		</div>

		<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
			<div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
				<div class="my-3 py-3">
					<h2 class="display-5">Tareas <span>&#128209;</span> </h2>
					<p class="lead">Crea tareas y asignalas a los usuarios. Revisa tus tareas, cumple tus propias expectativas</p>
					<a class="btn btn-outline-light" href="tareas.php">Tareas</a>
				</div>
				<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
			</div>
			<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
				<div class="my-3 p-3">
					<h2 class="display-5">Usuarios <span>&#128101;</span></h2>
					<p class="lead">Registra un usuario o revisa cuantos usuarios tienes registrados, asignales tareas.</p>
					<a class="btn btn-outline-secondary" href="usuarios.php">Usuarios</a>
				</div>
				<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
			</div>
		</div>

		<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
			<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
				<div class="my-3 p-3">
					<h2 class="display-5">Seguimiento. <span>&#128202;</span></h2>
					<p class="lead">Realiza el seguimiento de tareas por fecha, al estilo canvas, organiza por tiempo y prioridad.</p>
					<a class="btn btn-outline-secondary" href="seguimiento.php">Seguimiento</a>
				</div>
				<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
			</div>
			<div class="bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
				<div class="my-3 py-3">
					<h2 class="display-5">Calendario <span>&#128198;</span> </h2>
					<p class="lead">Mira las tareas pendientes por entregar, o graba las tareas que requieren ser resueltas prioritariamente.</p>
					<a class="btn btn-outline-light" href="calendario.php">Calendario</a>
				</div>
				<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
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