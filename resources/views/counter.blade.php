<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Películas</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="container">
    <h1 class="mt-4">Contador de Películas</h1>
    <p class="lead">El número total de películas registradas es:</p>

    <div class="alert alert-primary">
        <h2>{{ $totalFilms }}</h2>
    </div>

    <a href="/" class="btn btn-secondary mt-4">Volver al inicio</a>
</body>

</html>
