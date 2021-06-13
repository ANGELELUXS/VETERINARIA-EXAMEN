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