<?php

session_start();



if (!isset($_SESSION['id'])) {
    header("Location: ../../index.html");
}
$saldo = $_SESSION['saldo'];

?>

<!doctype html>
<html lang="en">

<head>
    <title>Consulta de Saldo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Cajero Express</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
    <main class="py-5">
        <div class="container">
            <h1 class="fw-bold text-center mb-4">Consulta su saldo</h1>
            <div class="vstack gap-3 col-md-6 mx-auto p-4 border rounded-3 shadow-sm bg-light">
                <h2 class="text-center">Su saldo actual es de:</h2>
                <h3 class="text-center text-primary">$<?= $saldo;?></h3>
                <div class="d-grid">
                <a class="btn btn-primary" href="../home/index.php">Regresar</a>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-light text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; 2024 Cajero Express. Todos los derechos reservados.</p>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>