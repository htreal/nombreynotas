<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>INGRESE SU NOMBRE Y CALCULE EL PROMEDIO</h1>

    <form action="procesador.php" method="POST">
        <label for="">Nombre:</label><br>
        <input type="text" name="nombre"><br><br>

        <label for="">Nota 1:</label><br>
        <input type="text" name="nota1"> <br><br>
        
        <label for="">Nota 2:</label><br>
        <input type="text" name="nota2"> <br><br>

        <label for="">Nota 3:</label><br>
        <input type="text" name="nota3"> <br> <br>
         
        <label for="">Nota 4:</label><br>
        <input type="text" name="nota4"> <br><br>

        <input type="submit" value="Calcular" name="submit">
        

    </form>

</body>
</html>