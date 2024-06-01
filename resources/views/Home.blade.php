<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
        <h1>Bienvenido a la pagina principal</h1>
        <x-alert2 type="success" class="mb-8">
            <x-slot name="title">
                Alert
            </x-slot>
            Contenido de la alerta
        </x-alert2>
        <p>Hola Mundo</p>
    </div>
</body>
</html>