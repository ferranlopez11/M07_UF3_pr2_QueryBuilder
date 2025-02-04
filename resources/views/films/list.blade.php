<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .table-custom {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .table-custom th, .table-custom td {
            vertical-align: middle;
        }
        .img-thumbnail {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">{{ $title }}</h1>
        @if(empty($films))
            <div class="alert alert-danger text-center">No se ha encontrado ninguna película</div>
        @else
            <div class="table-responsive">
                <table class="table table-custom table-hover">
                    <thead class="table-dark">
                        <tr>
                            @foreach(array_keys($films[0]) as $key)
                                <th>{{ ucfirst($key) }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($films as $film)
                            <tr>
                                <td>{{ $film['name'] }}</td>
                                <td>{{ $film['year'] }}</td>
                                <td>{{ $film['genre'] }}</td>
                                <td>{{ $film['country'] }}</td>
                                <td>{{ $film['duration'] }} minutos</td>
                                <td><img src="{{ $film['img_url'] }}" class="img-thumbnail" alt="{{ $film['name'] }}"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>