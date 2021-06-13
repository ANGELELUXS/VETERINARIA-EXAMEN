<?php

include("conexion.php");
$cone=conectar();

$Id=$_GET['id'];

$sql="DELETE FROM veterinaria WHERE Id='$Id'";
$query= mysqli_query($cone,$sql);

if($query){
    Header("Location: home.php");
}
?>