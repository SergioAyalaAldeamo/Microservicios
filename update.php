<?php
include("conexion.php");
$con = conectar();
$cod1 = $_POST['txtcod'];
$nom1 = $_POST['txtnom'];
$ape1 = $_POST['txtape'];
$ced1 = $_POST['txtced'];

$sql="UPDATE alumno SET cedula = $ced1, nombres= '$nom1', apellidos='$ape1' WHERE cod_estudiante=$cod1";

$query=mysqli_query($con,$sql);

if($query){
    Header("location: index.php");
}
?>