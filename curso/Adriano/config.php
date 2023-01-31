<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'gabibi89'; 
    $dbname = 'cadastro';

    $conn = new mysqli($dbHost,$dbUsername,$dbPassword,$dbname);
    if($conn->connect_errno){
        echo "Erro na Conexao";
    }
    else
    {
        echo "Conexao realizada com sucesso";
    }
 
?> 