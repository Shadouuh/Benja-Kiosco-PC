<?php
    if(!empty($_POST["login"])){
        $nom = $_POST["nom"];
        $contra = $_POST["con"];
        $query = $c -> query("SELECT * FROM users WHERE nombre = '$nom' && contraseña = '$contra'");
        if ($query -> num_rows > 0){
            header('Location: Views/Pages/Inicio.php');
        } else{
            echo 'Usuario NO Encontrado';
        }
    }
?>