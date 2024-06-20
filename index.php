<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de datos</title>
</head>
<body>
<form action="votar.php" method="POST">
<label for="">Nombre:</label>
<input type="text" pattern="[A-Z]a-z|ñ|Ñ|ü|Ü|á|Á|é|É|í|Í|ó|Ó|ú|Ú]" name="name" required><br>
<label for="">Edad:</label>
<input type="number" name="edad" pattern="[1-2]{1,99}" required><br>
<button type="submit">Enviar</button>
</form>
</body>
</html>