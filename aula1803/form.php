<?php 
    $nome = $_POST['nome'];
    $nota1 = $_POST['n1'];
    $nota2 = $_POST['n2'];
    $nota3 = $_POST['n3'];

    $media = ($nota1 + $nota2 + $nota3)/3;
    $mediaArredondada = round($media,2);
    echo ("O aluno ficou com média: $media");

    if($media >=6){
        echo (" <br>$nome <font color='green'>APROVADO!</font>");
    }else if($media >4 && 5) {
        echo (" <br>$nome em  <font color='blue'>RECUPERAÇÃO!</font>");
    }else{
        echo (" <br> <font color='red'>REPROVADO!</font>");
    }
?>