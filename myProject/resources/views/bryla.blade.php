<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Moja strona</h1>
    <p>Witaj na mojej stronie internetowej!</p>
    <nav>
        <a href="index.html">Strona główna</a>
        <a href="kontakt.html">Kontakt</a>
        <a href="o-mnie.html">O mnie</a>
    </nav>

    <p>
        Prostopadłościan o wymiarach {{$height}} × {{$width}} × {{$depth}} ma pojemność {{$pojemnosc}} m3. 
    </p>
</body>
</html>


