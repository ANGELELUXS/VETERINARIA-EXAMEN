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

$sql="UPDATE veterinaria SET Dueño='$Dueño', Enfermedad='$Enfermedad', Nombre='$Nombre', Peso='$Peso', Raza='$Raza', Tamaño='$Tamaño', Tratamiento='$Tratamiento' WHERE Id='$Id'";
$query=mysqli_query($cone,$sql);

if($query){
    Header("Location: home.php");
}
?>