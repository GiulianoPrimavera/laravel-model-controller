<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($model as $movie)
        <div>
            <p>questo è l'id: <span>{{ $movie->id }}</span></p>
        </div>
    @endforeach
</body>
</html>