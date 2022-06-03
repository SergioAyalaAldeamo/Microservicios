<?php
include("conexion.php");

$con = conectar();

$cod = $_POST['txtcod'];
$nom = $_POST['txtnom'];
$ape = $_POST['txtape'];
$ced = $_POST['txtced'];
$sql="INSERT INTO alumno VALUES('$cod','$ced','$nom','$ape')";
$query = mysqli_query($con,$sql);

if($query){
    Header("location: index.php");
}else{}

?>