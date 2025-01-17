<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>

    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Include any additional stylesheets or scripts here -->
</head>

<body class="container">

    <h1 class="mt-4">Lista de Peliculas</h1>
    <ul>
        <li><a href=/filmout/oldFilms>Pelis antiguas</a></li>
        <li><a href=/filmout/newFilms>Pelis nuevas</a></li>
        <li><a href=/filmout/films>Pelis</a></li>
    </ul>

    <hr>

    <h1 class="mt-4">Registrar Nueva Película</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <p>{{ $errors->first('error') }}</p>
        </div>
    @endif

    <form action="{{ url('filmin/createFilm') }}" method="POST" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" class="form-control" required><br>
        </div>

        <div class="form-group">
            <label for="year">Año:</label>
            <input type="number" name="year" id="year" class="form-control" required><br>
        </div>

        <div class="form-group">
            <label for="genre">Género:</label>
            <input type="text" name="genre" id="genre" class="form-control" required><br>
        </div>

        <div class="form-group">
            <label for="country">País:</label>
            <input type="text" name="country" id="country" class="form-control" required><br>
        </div>

        <div class="form-group">
            <label for="duration">Duración (minutos):</label>
            <input type="number" name="duration" id="duration" class="form-control" required><br>
        </div>

        <div class="form-group">
            <label for="url_image">URL de la imagen:</label>
            <input type="text" name="url_image" id="url_image" class="form-control" required><br>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Película</button>
    </form>

    <!-- Add Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Include any additional HTML or Blade directives here -->

</body>

</html>
