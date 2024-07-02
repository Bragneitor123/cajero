<?php

session_start();



if (!isset($_SESSION['id'])) {
    header("Location: ../../index.html");
}
$nombre = $_SESSION['nombre'];
$ap_paterno = $_SESSION['ap_paterno'];

$nombre_completo = $nombre . " " . $ap_paterno;
?>

<!doctype html>
<html lang="en">

<head>
    <title>Bienvenido Usuario</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }
    </style>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm navbar-light bg-light ">
            <div class="container">
                <a class="navbar-brand">Cajero Express</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigathtion">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="py-5">
        <div class="container">
            <h1 class="fw-bold text-center mb-4">Bienvenido <?= $nombre_completo; ?> </h1>
            <h2 class="fw-semibold text-center mb-4">¿Qué acción desea realizar?</h2>
            <div class="vstack gap-3 col-md-6 mx-auto">
                <a class="btn btn-primary btn-lg m-2" href="../saldo/index.php">Consultar saldo</a>
                <a class="btn btn-secondary btn-lg m-2" href="../retiro/index.php">Retirar dinero</a>
                <a class="btn btn-danger btn-lg m-2" href="../../connection/logout.php" aria-current="page">
                Cerrar sesión</a>
            </div>
        </div>
    </main>
    <footer class="bg-light text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; 2024 Cajero Express. Todos los derechos reservados.</p>
        </div>F
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>