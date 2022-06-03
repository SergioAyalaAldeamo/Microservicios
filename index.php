<?php
include("conexion.php");
$cone=conectar();

$base="SELECT * FROM alumno";

$query=mysqli_query($cone,$base);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Microservicio</title>
    
</head>
<body>
<link rel="stylesheet" href="css.css">
<div class="algo container mt-5">
    <div class="row">
        <div class="col -md-3 p-4 mb-2 bg-white text-dark">


            <!--sección donde se insertarán los datos-->
            <h1>Ingrese Datos</h1>
            <form action="insertar.php" method="POST">
                <input type="text" class="form-control mb-4" name="txtcod" placeholder="Ingrese el código del estudiante">
                <input type="text" class="form-control mb-4" name="txtced" placeholder="Ingrese la cedula del estudiante">
                <input type="text" class="form-control mb-4" name="txtnom" placeholder="Ingrese los nombres del estudiante">
                <input type="text" class="form-control mb-4" name="txtape" placeholder="Ingrese los apellidos del estudiante">
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
        
    </div>
</div>
<div class=" algo2 col -md-8 ">
            <table class="table border border-white border border-4">
                <thead class="table-success table-striped border border-4">
                    <tr>
                        <th>
                            Código 
                        </th>
                        <th>
                            Cedula 
                        </th>
                        <th>
                            Nombres
                        </th>
                        <th>
                            apellidos
                        </th>
                        <th>
                            Editar
                        </th>
                        <th>
                            Eliminar
                        </th>
                    </tr>

                </thead>
                <tbody class="table -md-3 p-4 mb-2 bg-white">
                    <?php
                    while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr class="border border-white border-bottom border border-2">
                            <th><?php echo $row['cod_estudiante']?></th>
                            <th><?php echo $row['cedula']?></th>
                            <th><?php echo $row['nombres']?></th>
                            <th><?php echo $row['apellidos']?></th>
                            <th><a href="actualizar.php?id=<?php echo $row['cod_estudiante']?>" class="btn btn-info text-dark">Editar</a></th>
                            <th><a href="delete.php?id=<?php echo $row['cod_estudiante']?>" class="btn btn-danger text-dark">Eliminar</a></th >
                        
                        </tr>
                    <?php
                    }
                    ?>

                </tbodAy>

            </table>

        </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>