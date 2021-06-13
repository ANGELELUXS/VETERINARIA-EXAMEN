<?php
include("conexion.php");
$cone=conectar();

$Id=$_GET['id'];

$sql="SELECT * FROM veterinaria WHERE Id='$Id'";
$query= mysqli_query($cone,$sql);
$row=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
         <title>VETERINARIA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <div class="container mt-5">
	<h1>MODIFICAR DATOS</h1>
                    <form action="datos.php" method="POST">
                    <input type="hidden" name="Id" value="<?php echo $row['Id'] ?>">
                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row ['Nombre'] ?>">
                    <input type="text" class="form-control mb-3" name="Dueño" placeholder="Nombre del dueño" value="<?php echo $row ['Dueño'] ?>">
                    <input type="text" class="form-control mb-3" name="Raza" placeholder="Raza" value="<?php echo $row ['Raza'] ?>">
                    <input type="text" class="form-control mb-3" name="Peso" placeholder="Peso, por ej: 8.500" value="<?php echo $row ['Peso'] ?>">
                    <input type="text" class="form-control mb-3" name="Tamaño"placeholder="Tamaño por ej: Pequeño, Mediano, Grande" value="<?php echo $row ['Tamaño'] ?>">
                    <input type="text" class="form-control mb-3" name="Enfermedad"placeholder="Enfermedad" value="<?php echo $row ['Enfermedad'] ?>">
                    <input type="text" class="form-control mb-3" name="Tratamiento"placeholder="Tratamiento" value="<?php echo $row ['Tratamiento'] ?>">
                    <input type="text" class="form-control mb-3" name="Fecha"placeholder="Fecha, ej: 2000-04-14" value="<?php echo $row ['Fecha'] ?>">
                    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                    </div>
    </body>
</html>