<?php
session_start();

    $A = $_GET["A"] ;
    $B = $_GET["B"] ;

    $resultat = $A * $B ;
    
    
$_SESSION["resultat"]= $A *$B ;
    header("Location:mon_fichier_1.php") ;