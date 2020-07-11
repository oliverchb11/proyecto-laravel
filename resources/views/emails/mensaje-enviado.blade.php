<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Correo enviado</h1>
    <ul>
        <li>Nombre:{{$msg['nombre']}}</li>
        <li>Asunto:{{$msg['asunto']}}</li>
        <li>Email:{{$msg['email']}}</li>
        <li>Comentarios:{{$msg['comentarios']}}</li>
    </ul>

</body>
</html>
