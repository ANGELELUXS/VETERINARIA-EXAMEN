<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM veterinaria";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>VETERINARIA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
    <div class="container mt-2">
                    <div class="row"> 
                        
                    <div class="col-md-4">
                            <h1>INGRESAR DATOS</h1>
                                <form action="guardar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="Id" placeholder="Ingrese ID">
                                    <input type="text" class="form-control mb-3" name="Nombre"placeholder="Nombre de la mascota">
                                    <input type="text" class="form-control mb-3" name="Dueño" placeholder="Nombre del dueño">
                                    <input type="text" class="form-control mb-3" name="Raza"placeholder="Raza">
                                    <input type="text" class="form-control mb-3" name="Peso"placeholder="Peso, por ej: 8.500 ">
                                    <input type="text" class="form-control mb-3" name="Tamaño"placeholder="Tamaño por ej: Pequeño, Mediano, Grande">
                                    <input type="text" class="form-control mb-3" name="Enfermedad"placeholder="Enfermedad">
                                    <input type="text" class="form-control mb-3" name="Tratamiento"placeholder="Tratamiento">
                                    <input type="text" class="form-control mb-3" name="Fecha"placeholder="Fecha, ej: 2000-04-14">
 

                                    <input type="submit" class="btn btn-primary">

                                </form>


                                </div>
                                
     <div class="col-md-4">
     
    
    <table  class="table" >
<h1>REGISTRO DE DATOS</h1>
        <thead class="table-success table-striped" >
            <tr>
			    <th>Id</th>
				<th>Nombre</th>
                <th>Dueño</th>
				<th>Raza</th>
				<th>Peso</th>
				<th>Tamaño</th>
                <th>Enfermedad</th>
				<th>Tratamiento</th>
                <th>Fecha</th>
                <th></th>
                <th></th>

                
               
            </tr>
        </thead>

        <tbody>
                <?php
                    while($row=mysqli_fetch_array($query)){
                ?>
                    <tr>
					<th><?php  echo $row['Id']?></th>
					<th><?php  echo $row['Nombre']?></th>
                    <th><?php  echo $row['Dueño']?></th>
					<th><?php  echo $row['Raza']?></th>
                    <th><?php  echo $row['Peso']?></th>
                    <th><?php  echo $row['Tamaño']?></th>
					<th><?php  echo $row['Enfermedad']?></th>
                    <th><?php  echo $row['Tratamiento']?></th> 
                    <th><?php  echo $row['Fecha']?></th>
                       
                    <th><a href="editar.php?id=<?php echo $row['Id'] ?>" class="btn btn-info">Editar</a></th>
                    <th><a href="delete.php?id=<?php echo $row['Id'] ?>" class="btn btn-danger">Eliminar</a></th>

                    </tr>
                <?php 
                    }
                ?>
				
        </tbody>
    </table>
	<font color="black">ANGEL MARIANO UICAB CANCHE</font>
</div>
</div>  
                                </div>
                     </div>

            </div>
			
	</body>
</html>