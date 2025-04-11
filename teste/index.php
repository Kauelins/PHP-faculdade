<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste da aula 1803</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <?php 
     $nome = $_POST['nome'] ?? 0;
     $nota1 = $_POST['n1'] ?? 0;
     $nota2 = $_POST['n2'] ?? 0;
     $nota3 = $_POST['n3'] ?? 0;
     $media = ($nota1 + $nota2 + $nota3)/3;
     $mediaArredondada = round($media,2);
    ?>
     <div class="principal">
    <h2>Formulário de notas</h2>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label for="nome">Nome</label>
    <input type="text" size="30" name="nome">
    <br><br>
    <label for="nota1">Nota 1:</label>
    <input type="text" size="30" name="n1">
    <br><br>
    <label for="nota2">Nota 2:</label>
    <input type="text" size="30" name="n2">
    <br><br>
    <label for="nota2">Nota 3:</label>
    <input type="text" size="30" name="n3">
    <br><br>
    <input type="submit" value="Calcular">
    </form>
    </div>
    <section>
        <h2>Resultado</h2>
        <?php 
             echo ("O aluno ficou com média: $media");
         
             if($media >=6){
                 echo (" <br>$nome <font color='green'>APROVADO!</font>");
             }else if($media >4 && 5) {
                 echo (" <br>$nome em  <font color='blue'>RECUPERAÇÃO!</font>");
             }else{
                 echo (" <br> <font color='red'>REPROVADO!</font>");
             }
        ?>
    </section>
</body>
</html>