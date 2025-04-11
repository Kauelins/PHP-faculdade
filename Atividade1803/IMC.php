<?php 
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura ** 2);
    echo ("Seu IMC é:" . number_format($imc,2));
    if ($imc <= 18.5) {
        echo (" <br>Você está abaixo do peso");
    } elseif ($imc > 18.5 && $imc <= 24.9) {
        echo (" <br>Você está com o peso normal");
    } elseif ($imc >= 25 && $imc <= 29.9) {
        echo (" <br>Você está acima do peso");
    } elseif ($imc >= 30 && $imc <= 40) {
        echo (" <br>Você está obeso");
    } else {
        echo (" <br>Você está com obesidade grave");
    }
?>