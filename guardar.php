<?php
include("conexion.php");
$cone=conectar();


$Id=$_POST['Id'];
$Nombre=$_POST['Nombre'];
$Dueño=$_POST['Dueño'];
$Raza=$_POST['Raza'];
$Peso=$_POST['Peso'];
$Tamaño=$_POST['Tamaño'];
$Enfermedad=$_POST['Enfermedad'];
$Tratamiento=$_POST['Tratamiento'];
$Fecha=$_POST['Fecha'];

$sql="INSERT INTO veterinaria (Id, Nombre, Dueño, Raza, Peso, Tamaño, Enfermedad, Tratamiento, Fecha) VALUES ('$Id', '$Nombre', '$Dueño', '$Raza', '$Peso', '$Tamaño', '$Enfermedad', '$Tratamiento', '$Fecha')";
$query= mysqli_query($cone,$sql);

if($query){
    Header("Location: home.php");
     
 }else{
 }
?>