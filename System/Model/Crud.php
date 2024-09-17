<?php
    function insertFunction($table, $values){
    require('Controller\ConDB.php');
    $att = [];
    $postValues = [];
    $i = 0;
        $query = $c -> query("DESCRIBE $table");
        while($col = $query -> fetch_assoc()){
        array_push($att, $col['Field']);
        array_push($postValues, $_POST[$values[$i]]);
        $i++;
    }
    $ImAtt = implode(', ', $att);
    $ImValues = implode(', ', array_fill(0, count($att), '?'));
    $P_Query = $c -> prepare("INSERT INTO $table ($ImAtt) VALUES ($ImValues)");
    $types = typesFunc($postValues);
    $params = array_merge([$types], $postValues);
    $P_Query -> bind_param(...$params);
    if ($P_Query -> execute()) {echo 'Éxito';} 
    }

    function typesFunc($postValues){
        $types = '';
        foreach ($postValues as $value) {
            if (is_int($value)) {
                $types .= 'i'; // Tipo entero
            } elseif (is_string($value)) {
                $types .= 's'; // Tipo cadena
            } elseif (is_double($value)) {
                $types .= 'd'; // Tipo double (decimal)
            } else {
                $types .= 'b'; // Tipo blob (binary)
            }
        }
        return $types;
    }
?>