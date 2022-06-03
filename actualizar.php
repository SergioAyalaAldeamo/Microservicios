<?php
include("conexion.php");
$con = conectar();
$id1=$_GET['id'];
$sql="SELECT * FROM alumno WHERE cod_estudiante = $id1";
$query=mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="css.css">
<div class="container mt-5">
    <form action="update.php" method ="POST">
        <input type="hidden" name="txtcod" value="<?php echo $row['cod_estudiante']?>">
        <input type="text" class="form-control mb-3" name="txtced" value="<?php echo $row['cedula']?>">
        <input type="text" class="form-control mb-3" name="txtnom" value="<?php echo $row['nombres']?>">
        <input type="text" class="form-control mb-3" name="txtape" value="<?php echo $row['apellidos']?>">
        <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>

