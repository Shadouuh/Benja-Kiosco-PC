
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benja's Kiosco | Admin</title>
    <!-- CSS -->
     <link rel="stylesheet" href="../Css/StyleEdit.css">
</head>
<body>
   <main>
   <?php
   
   require('../../Controller\ConDB.php');
   $id = $_GET["id"];
   $nom = $_GET["nom"];
   $query = $c -> query("SELECT * FROM prods WHERE id_p = '$id'");
   $row = $query -> fetch_assoc();
   echo '<form action="" method="post">
         <div class="title">
            <h1>Editar</h1>
         </div>
         <input type="text" name="id" id="" required value="' . $id .'" hidden>
         <input type="text" name="user" id="" required value="' . $nom .'" hidden>
         <div class="inputs">
            <input type="text" name="nom" id="" required value="' . $row["nombre"] .'">
            <label>Ingrese Nombre</label>
         </div>
         <div class="inputs">
            <input type="text" name="mar" id="" required value="' . $row["marca"] .'">
            <label>Ingrese Marca</label>
         </div>
         <div class="inputs">
            <input type="number" name="pre" id="" required value="' . $row["precio"] .'">
            <label>Ingrese Precio</label>
         </div>
         <div class="inputs">
            <input type="number" name="sto" id="" required value="' . $row["stock"] .'">
            <label>Ingrese Stock</label>
         </div>
         <input type="submit" value="Editar" class="btn" name="edit">
            </form>';
            include('../../Model/Login.php');
            include('../../Model/Edit.php');
            
         ?>
         
   </main>
</body>

</html>