<?php
    $query = $c -> query("SELECT * FROM prods");
    if ($query -> num_rows > 0){
        echo '<div class="container">';
        while($row = $query -> fetch_assoc()){
            echo '<div class="prod">
                <img src="../Images/BG.jpeg" alt="" class="imgP">
                <div class="content">
                    <div class="upper">
                        <h2>' . $row['nombre'] .'</h2>
                        <h5>' . $row['marca'] .'</h5>
                    </div>
                    <div class="cant">
                        <h4>Cant:</h4>
                        <input type="number" value="1" min="1" max="' . $row['stock'] .'">
                    </div>
                    <div class="dwner">
                        <h4>$' . $row['precio'] .'</h4>
                         <form action="Edit.php" method="get">
                         <input type="text" value="' . $nom .'"  name="nom" hidden>
                         <input type="number" value="' . $row['id_p'] .'" hidden name="id">
                            <input type="submit" value="Editar">
                         </form>
                        
                    </div>
                </div>
            </div> ';
        }   
        echo '</div>';
    } else{
        echo 'No hay ningun producto';
    }
?>