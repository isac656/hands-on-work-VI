<?php
    include 'head.html';
    include 'conexao.php';

    $sql = "select * from cursos";
    $res = $conexao->query($sql);
    $qtd = $res->rowCount();

    if($qtd > 0){
    while($row = $res->fetchObject()){
        $id_curso = $row->id_curso;
        $nome_curso = $row->nome_curso;
        $datacurso = $row->horario_curso;
        $nome_professor = $row->nome_professor;
        echo "
        <table class='table table-borderless'>
            <thead>
                <th>id_curso</th>
                <th>nome do curso</th>
                <th>nome do professor</th>
                <th>dias do curso</th>
                <th>opções</th>

            </thead>
            <tbody>
                <tr>
                    <td>$id_curso</td>
                    <td>$nome_curso</td>
                    <td>$nome_professor</td>
                    <td>$datacurso</td>
                    <td>
                        <a class='btn btn-primary' href=edita_curso.php?id=$id_curso' role='button'>editar</a>
                    </td>
                </tr>
            </tbody>
        </table>";
    }
    }
?>