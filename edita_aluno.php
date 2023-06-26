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
    
    include 'conexao.php';
    $id = $_GET["id"];
   
    $statement = $conexao->query("SELECT * FROM alunos WHERE id_matricula = ". (int) $id);
    $linha = $statement->fetchObject();

    $id = $linha->id_matricula;
    $nome = $linha->nome;
    $dataNasc = $linha->data_nascimento;
    $curso = $linha-> id_curso;
    
?>
    <div>
      <h1>formulario de atualização</h1>
    </div>
  </br>
  <form action="atualiza_aluno.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id?>">
    <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="nomeDoAluno" class="col-form-label">Nome:</label>
          <div class="col-auto">
            <input type="text" name="nome" value="<?php echo $nome?>" id="nomeDoAluno" class="form-control">
          </div>
        </div>
    </div>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="dataNascimento" class="col-form-label">Data de nascimento:</label>
          <div class="col-auto">
            <input type="date" name="dataDeNascimento" value="<?php echo $dataNasc ?>" id="dataNascimento" class="form-control">
          </div>
        </div>
    </div>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="Curso" class="col-form-label">Curso:</label>
          <div class="col-auto">
            <input type="text" name="id_curso"  id="Curso" class="form-control">
          </div>
        </div>
    </div>
    </br>
    <input type="submit" class="btn btn-primary" role="button"></input>
  </form>
</body>
</html>