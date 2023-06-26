<?php 
    
    include 'conexao.php';

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $dias = $_POST["dias"];
    $nomeProfessor = $_POST["nomeProfessor"];

       
    $sql = "UPDATE cursos SET nome_curso='{$nome}', horario_curso='{$dias}', nome_professor='{$nomeProfessor}' WHERE id_curso=". $id;

    echo $sql;

    $stetament = $conexao->query($sql);
        
    if($stetament){
        header('location:mostra_alunos.php');
    }else {
        echo 'erro ao editar dados';
    }
       
        
    
?>  