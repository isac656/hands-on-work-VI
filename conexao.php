<?php
    $conexao = new PDO('mysql:host=localhost;dbname=escola','root','');
    if(!$conexao){
        echo 'erro de conexão';
    }
?>