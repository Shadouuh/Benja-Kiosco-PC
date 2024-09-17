<?php
    if(!empty($_POST["edit"])){
        $id = $_POST["id"];
        $nom = $_POST["nom"];
        $mar = $_POST["mar"];
        $pre = $_POST["pre"];
        $sto = $_POST["sto"];
            $query = $c -> query("UPDATE prods SET nombre = '$nom', marca = '$mar', precio = '$pre', stock = '$sto' WHERE id_p = '$id'");
            if ($query){
                header('Location: Inicio.php');
            } else{
                echo 'no se edito';
            }
        }
?>