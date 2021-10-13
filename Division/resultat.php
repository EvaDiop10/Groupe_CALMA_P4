<?php
    session_start();
    $a = $_GET['a'];
    $b = $_GET['b'];

    if ($a  == 0) {
        echo "vide";
        exit();
    }

    //je déclare une session pour y stocker le résultat
    $_SESSION['resulat'] = $a / $b;
    $_SESSION['message'] = $a." divisé par ".$b. " = ";

    header('Location: index.php');