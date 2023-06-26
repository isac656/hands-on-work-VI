<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>objeto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<body>
<?php
echo"
     <a class='btn btn-warning' href='cadastra_aluno.php' role='button'>cadastrar aluno</a>
     <a class='btn btn-success' href='cadastra_curso.php' role='button'>cadastrar curso</a>
     </br></br></br>
     ";

   include 'conexao.php';
   $sql = "select * from alunos";
   $res = $conexao->query($sql);
   $qtd = $res->rowCount();

   if($qtd > 0){
    while($row = $res->fetchObject()){
        $matricula = $row->id_matricula;
        $nome = $row->nome;
        $dataNascimento = $row->data_nascimento;
        $idCurso = $row->id_curso;
        echo "
        <table class='table table-borderless'>
        <thead>
            <th>matricula</th>
            <th>nome sobrenome</th>
            <th>data de nascimento</th>
            <th>curso</th>
            <th>opçoes</th>
        </thead>
        <tbody>
            <tr>
                <td>$matricula</td>
                <td>$nome</td>
                <td>$dataNascimento</td>
                <td>$idCurso</td>
                <td>
                    <a class='btn btn-primary' href=edita_aluno.php?id=$matricula' role='button'>editar</a>
                    <a class='btn btn-danger' href='deleta_aluno.php?id=$matricula' role='button'>deletar</a>
                </td>
              </tr>
        </tbody>
    </table>";
    }
   }
    
?>
</body>
</html>