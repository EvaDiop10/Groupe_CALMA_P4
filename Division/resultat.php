<?php
    session_start();
    $a = $_GET['a'];
    $b = $_GET['b'];

    if ($a  == 0) {
        echo "vide";
    }

    //je déclare une session pour y stocker le résultat
    $_SESSION['resulat'] = $a / $b;

    header('Location: index.php');