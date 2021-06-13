<!DOCTYPE HTML>
<?php 
if (isset($_POST['contraseña'])) { 
 $contraseña = $_POST['contraseña']; 
 if ($contraseña == "12345") 
 header ("Location: home.php"); 
 } elseif ($contraseña == "" ){ 
 ?>
    <?php
 header ("index.php"); 

} 
?>
<html>
  <head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"  href="css/estilo.css">
   <title>VETERINARIA</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
  
  </head>
 <body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
    <h1>BIENVENIDO</h1>
	 <h2>INICIAR SECCION</h2>
    <p>Usuario:<input type="text" placeholder="nombre del usuario" name="usuario"> </p>
    <p>Contraseña:<input type="password" placeholder="ingresa la contraseña" name="contraseña"> </p>
    <input type="submit" value="ingresar">
	 </form>
</body>
</html>