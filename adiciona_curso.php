<?php
    include 'conexao.php';

    $nome = $_POST["nome"];
    $nomeProfessor = $_POST["nomeProfessor"];
    $diasCurso = $_POST["dias"];


  
    $statement = $conexao->prepare("INSERT INTO cursos (nome_curso, nome_professor, horario_curso) VALUES (?, ?, ?)");


    $statement->bindParam(1, $nome);
    $statement->bindParam(2, $nomeProfessor);
    $statement->bindParam(3, $diasCurso);


    if($statement->execute()){
        echo 'curso criado com sucesso';
        header('location:cadastra_curso.php');
    }else{
        echo 'erro no cadastro';
    }
 


?>