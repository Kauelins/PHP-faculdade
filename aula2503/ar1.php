<?php 
    $array = array("Terça-feira", "Quarta-feira", "Quinta-feira");
    print_r($array);
    echo "<br>";
    echo "<hr>";
    echo($array[1]);
    echo "<hr>";
    echo "<pre>";
    $array2 = ["Aula", "PHP", "html", "CSS"];
    print_r($array2);
    echo "<pre>";
    echo "<hr>";
    $array3=[];
    $array3[] = "ADS";
    $array3[] = "GTI";
    $array3[] = "SI";

    print_r($array3);
    echo ("<hr>");
    $array4 = [1=>"iphone 16", 2=>"Galaxy", "zenfone", 4=>"Xaiomi"];
    print_r($array4);
    echo "<br>";
    echo "<hr>";
    echo($array4[4]);
    echo"</pre>";
    echo"<br>";
    echo "<hr>";
    $array5 = range(1, 10);
    print_r($array5);
    echo "<hr>";
    $array6 = ['São Paulo', 'Brasilia', 'Goiania', 'Palmas', "Rio de janeiro"];
    foreach ($array6 as $cidade) {
        echo $cidade."<br>";
    }
    echo "<hr>";
    $array7 = ["kaue"=>"22 anos", "pedro"=>" 21 anos", "joao"=> "20 anos"];
   echo ($array7["kaue"]);
   echo "<br>";
   echo "<hr>";
   $array8 = range(11, 20);
   print_r($array8);
   echo "<hr>";
   $array9 = [1, 2, 3, 4, 5,6];
   array_pop($array9);
   print_r($array9);
   echo "<hr>";

   $array10 = [5 + 5 + 5];
   foreach ($array10 as $numeros) {
    echo $numeros;
   }
   echo "<br>";
   echo "<hr>";
   $array11 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
   for ($i = 0; $i < count($array11); $i++) {
       if ($array11[$i] % 2 == 0) {  
           echo $array11[$i] . " ";
       }
   }
   echo "<hr>";
   echo "<br>";

   $array12 = [5, 10, 15];
    $maior = $array12[0];
    $menor = $array12[0];
    for ($i = 1; $i < count($array12); $i++) {
    if ($array12[$i] > $maior) {
        $maior = $array12[$i];
    }
    if ($array12[$i] < $menor) {
        $menor = $array12[$i];
    }
    }
    echo "O maior valor é: $maior\n";
    echo "O menor valor é: $menor\n";
    echo "<br>";
    echo "<hr>";
    $array13 = [1, 1, 2, 2, 3, 3, 4, 4];
    $resultado = array_unique($array13);
    print_r($resultado);
?>