<?php
    include 'conexao.php';

    $matricula = $_GET["id"];
    $statement = $conexao->prepare("DELETE FROM alunos where id_matricula = ".(int) $matricula);
    if($statement->execute()){
        header('location:mostra_alunos.php');
    }else{
        echo 'erro ao deletar aluno';
    }

    
?>
