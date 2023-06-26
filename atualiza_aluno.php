<?php 
    
    include 'conexao.php';

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $dataDeNascimento = $_POST["dataDeNascimento"];
    $id_curso = $_POST["id_curso"];
       
    $sql = "UPDATE alunos SET nome='{$nome}', data_nascimento='{$dataDeNascimento}', id_curso={$id_curso} WHERE id_matricula=". $id;

    $stetament = $conexao->query($sql);
        
    if($stetament){
        header('location:mostra_alunos.php');
    }else {
        echo 'erro ao editar dados';
    }
       
        
    
?>  