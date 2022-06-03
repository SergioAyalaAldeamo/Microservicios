<?php

function conectar(){
    $host="localhost:3306";
    $nom="root";
    $con="";
    $bd="bc";
    $connect= mysqli_connect($host,$nom,$con);
    mysqli_select_db($connect,$bd);
    return $connect;
}
?>

