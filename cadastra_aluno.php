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
    <div>
      <h1>formulario de cadastro</h1>
    </div>
  </br>
  <form action="add_aluno.php" method="post">
    <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="nomeDoAluno" class="col-form-label">Nome:</label>
          <div class="col-auto">
            <input type="text" name="nome" id="nomeDoAluno" class="form-control">
          </div>
        </div>
    </div>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="dataNascimento" class="col-form-label">Data de nascimento:</label>
          <div class="col-auto">
            <input type="date" name="dataDeNascimento" id="dataNascimento" class="form-control">
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
    <a class="btn btn-success" href="mostra_alunos.php" role="button">voltar</a>
  </form>
    
</body>
</html>