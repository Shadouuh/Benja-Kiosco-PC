<?php
    if(!empty($_GET["nom"])){
      $nom = $_GET["nom"];
    } else{
        $nom = "Invitado";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiosco | Inicio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Coves', sans-serif;
        }
        @font-face {
            font-family: 'Coves';
            src: url('../Fonts/Coves_Light.otf') format('opentype');
        }

        body {
            background: url("../Images/BG.jpg"), #000;
            background-position: center;
        background-size: cover;
        height: 100%;
        }

        nav {
            background-color: #00bfae;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .Search {
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 50px;
            padding: 5px;
            width: 100%;
            max-width: 500px;
        }

        .Search input {
            border: none;
            padding: 10px;
            border-radius: 50px;
            outline: none;
            flex: 1;
        }

        .Search img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-left: 10px;
        }

        main {
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 20px;
            width: 100%;
            max-width: 1200px;
        }

        .prod {
            flex-direction: column;
            display: flex;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            width: 22.2vw;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.385);
        }

        .imgP {
            width: 100%;
            padding: 5px;
            height: auto;
            object-fit: cover;
        }

        .content {
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .upper {
            margin-bottom: 10px;
        }

        .upper h2 {
            margin: 0;
            font-size: 18px;
        }

        .upper h5 {
            margin: 5px 0;
            color: #888;
        }

        .dwner {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dwner h4 {
            margin: 0;
            font-size: 20px;
            color: #333;
        }

        .dwner input {
            border: none;
            background-color: #00bfae;
            color: #fff;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
        }

        .cant {
            display: flex;
            align-items: center;
            padding: 10px 0px;
            gap: 10px;
            width: 80%;
        
        }

        .cant button, .cant input {
            font-size: 18px;
            padding: 10px;
            width: 50%;
            border: 1px solid #ddd;
            background-color: #fff;
            cursor: pointer;
        }
        .cant input{
            width: 100%;
        }
        .cant button {
            font-size: 20px;
            border-radius: 50%;
            background-color: #00bfae;
            color: #fff;
            border: none;
        }
    </style>
</head>

<body>
    <nav>
        <h1><?php echo $nom; ?></h1>
        <div class="Search">
            <input type="text" placeholder="Busque un Producto">
            <img src="../Images/BG.jpg" alt="">
        </div>
    </nav>
    <main>
        <?php
            require("../../Controller/ConDB.php");
            include("../../Model/Show.php");
        ?>
    </main>
</body>

</html>
