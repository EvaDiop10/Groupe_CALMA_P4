<?php session_start(); 
include("./menu.html")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Division</title>
</head>
<body>
    <div class="blog">
       <h1>La division entre 2 nombres</h1>
       <form action="resultat.php" methode="GET">
            <label for="">Donnez le premier nombre</label>
            <input type="number" name="a">
            <label for="">Donnez le deuxième nombre</label>
            <input type="number" name="b">

            <button>Calculer</button>

            <h1 class="reultat">
                <?php 
                    if ($_SESSION['resulat']) {
                        echo $_SESSION['resulat'];
                        session_destroy();
                    }
                ?>
            </h1>
            
       </form> 
        
    </div>
</body>
</html>