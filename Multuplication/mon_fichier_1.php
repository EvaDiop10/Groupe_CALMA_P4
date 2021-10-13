<?php 
session_start();
    include("menu.html");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>

</head>
<body>
    <div> 
        <h1>La multuplication entre deux nombres</h1>
        <form action="resultat.php" method="GET">
            <label>Donner le premier nombre</label>
            <input type="number" name="A" />
            <label>Donner le deuxième nombre</label>
            <input type="number" name="B"/>
            <button>Calculer</button>
            <h1>
                <?php   
                    echo $_SESSION["resultat"];
                ?>

            </h1>
        </form>
    </div>

</body>
</html>
