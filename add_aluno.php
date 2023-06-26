<?php
    include 'conexao.php';

    $nome = $_POST["nome"];
    $dataNascimento = $_POST["dataDeNascimento"];
    $idCurso = $_POST["id_curso"];
  
    $statement = $conexao->prepare("INSERT INTO alunos (nome, data_nascimento, id_curso) VALUES (?, ?, ?)");
    $statement->bindParam(1, $nome);
    $statement->bindParam(2, $dataNascimento);
    $statement->bindParam(3, $idCurso);


    if($statement->execute()){
        echo 'dados salvos com sucesso';
        header('location:mostra_alunos.php');
    }else{
        echo 'erro no cadastro';
    }
 

?>