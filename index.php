<!DOCTYPE html>
<html>
<head>
 <title>Registro de usuarios</title>
 <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <form method="post">
     <h1>¡Suscribete!</h1>
     <input type="text" name="name" placeholder="Ingrese su nombre completo">
     <input type="email" name="email" placeholder="Ingrese su Email">
     <input type="submit" name="register">
   </form>
       <?php
       include("registrar.php");
       ?>
</body>
</html>
