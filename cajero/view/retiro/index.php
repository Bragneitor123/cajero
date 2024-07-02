<?php

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: ../../index.html");
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Retirar Dinero</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Cajero Express</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    </header>
    <main class="py-5">
        <div class="container">
            <h1 class="fw-bold text-center mb-4">Retirar Dinero</h1>
            <form action="update.php" method="post" class="vstack gap-3 col-md-6 mx-auto p-4 border rounded-3 shadow-sm bg-light">
                <div class="mb-3">
                    <div class="row text-center">
                        <div class="col-4"><a href="update.php?monto=100" class="btn btn-primary">$100</a></div>
                        <div class="col-4"><a href="update.php?monto=200" class="btn btn-primary">$200</a></div>
                        <div class="col-4"><a href="update.php?monto=500" class="btn btn-primary">$500</a></div>
                    </div>
                    <label for="withdrawAmount" class="form-label">Ingrese el monto a retirar</label>
                    <input type="number" name="monto" id="withdrawAmount" class="form-control" placeholder="Monto a retirar" require/>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary mb-3" type="submit">Retirar dinero</button>  
                    <a class="btn btn-danger mb-3" href="../../index.html">Cancelar operación</a>
                    <a class="btn btn-warning" href="../home/index.php">Regresar</a>
                </div>
            </form>
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