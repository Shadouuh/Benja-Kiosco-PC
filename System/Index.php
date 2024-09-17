<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benja's Kiosco | Admin</title>
    <!-- CSS -->
     <link rel="stylesheet" href="Views/Css/Style.css">
</head>
<body>
   <main>
      
      <form action="Views/Pages/Inicio.php" method="get">
         <div class="title">
            <h1>Login</h1>
         </div>
         <div class="inputs">
            <input type="text" name="nom" id="" required>
            <label>Ingrese Nombre</label>
         </div>
         <div class="inputs">
            <input type="password" name="con" id="" required>
            <label>Ingrese Contraseña</label>
         </div>
         <?php
            require('Controller\ConDB.php');
            include('Model/Login.php');
         ?>
         <input type="submit" value="Iniciar Sesion" class="btn" name="login">
      </form>
   </main>
</body>

</html>