<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Soustraction</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
<body>
    <marquee height="40" behavior="alternate" direction="right"><strong>Calculateur artificiel offert par le groupe CALMA</strong></marquee>
<nav>
	<ul>
		<li><a href="../addition/add.html">Addition</a></li><!--
		--><li><a href="#">Multiplication</a></li><!--
		--><li><a href="#">Soustraction</a></li><!--
		--><li><a href="../Division/index.php">Division</a></li>
	</ul>
</nav>
            <h1>Soustraction de deux nombres.</h1>
            <form method="GET">
                <label for=""> Premiere valeur</label>
                <input type="number" name="premiereValeur">
                <label for="">  Deuxieme valeur</label>ls
                <input type="number" name="deuxiemeValeur">
                <input type="submit" value="Calculer">
                            
            </form>
            <h1 class="resultat"><?php include ('resultat.php');?></h1>
</body>
</html>
