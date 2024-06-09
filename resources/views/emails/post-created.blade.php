<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo Aprobacion</title>
</head>
<body>
    <h1>
        Correo por Aprobacion
    </h1>
    
    <p>
        Se ha creado un nuevo Post que se necesita ser aprobado
    </p>

    <a href="{{ route('posts.show', $post) }}">
        Click para probar
    </a>
</body>
</html>