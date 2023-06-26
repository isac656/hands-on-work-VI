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
      <h1>cadastro de curso</h1>
    </div>
  </br>
  <form action="adiciona_curso.php" method="post">
    <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="nomeDoCurso" class="col-form-label">Nome do curso:</label>
          <div class="col-auto">
            <input type="text" name="nome" id="nomeDoCurso" class="form-control" required>
          </div>
        </div>
    </div>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="nomeDoProfessor" class="col-form-label">Nome do professor:</label>
          <div class="col-auto">
            <input type="text" name="nomeProfessor" id="nomeDoProfessor" class="form-control" required>
          </div>
        </div>
    </div>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="diasCurso" class="col-form-label">dias :</label>
          <div class="col-auto">
            <input type="text" name="dias" id="diasCurso" class="form-control">
          </div>
        </div>
    </div>
    
    </br>
    <input type="submit" class="btn btn-primary" role="button"></input>
    <a class="btn btn-success" href="mostra_alunos.php" role="button">voltar</a>
  </form>

  <?php 

    echo '</br><h2> Cursos criados </h2>';
    include 'mostrar_cursos.php'
  
  
  ?>
  
    
</body>
</html>