<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primi Passi</title>
</head>
<body>
    <div>
        <div>
            <a href="{{ route('contatti') }}">Contatti</a>
            <a href="{{ route('about') }}">About</a>
        </div>

        <p>Ciao {{ $name }} !</p>
    </div>
</body>
</html>
