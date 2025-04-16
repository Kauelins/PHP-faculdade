<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<body>
        <div class="container">
    <?php 
        include('conexao.php');
        print("<h1> Listagem de Usuários</h1>");
        $sql = 'select * from usuarios';
        $res = $conn->query($sql);

        $qtde = $res ->num_rows;
        if($qtde >0){
            print("<table class='table table-striped'>");
            print("<tr>");
            print("<th> Código</th>");
            print("<th> Nome</th>");
            print("<th> Senha</th>");
            print("<th> Email</th>");
            print("<th> CPF</th>");
            print("<th> Data</th>");
            print("<th> Ações</th>");
            print("</tr>");
        while($row = $res-> fetch_object()){
            print("<tr>");
            print("<td>".$row->codigo."</td>");
            print("<td>".$row->nome."</td>");
            print("<td>" .$row->senha."</td>");
            print("<td>".$row->email."</td>");
            print("<td>".$row->cpf."</td>");
            print("<td>".$row->data."</td>");
            print("<td>
            <button class='btn btn-success'>Editar</button>
            <button class='btn btn-danger'>Deletar</button>
            
            </td>");
            print("</tr>");
    }
    print("</table>");
    }else{
        print("<p> Não foram encontrados registros!</p>");
    }
    ?>
    </div>
</body>
</html>