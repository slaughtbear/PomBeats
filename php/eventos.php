<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Uploads.php" methood = "POST" enctype = "multipart/form-data">
        <input type="text" name="titulo" placeholder = "titulo" required>
        <input type="text" name ="lugar" placeholder = "lugar" required>
        <input type="date" name ="fecha" placeholder = "fecha" required>
        <input type="textarea" name ="descripcion" required>
        <input type="file" name ="portada" required>
        <input type="submit" name="enviar">

    </form>
</body>
</html>