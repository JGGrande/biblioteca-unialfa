<?php
    $servidor = "localhost";
    $usuario  = "root";
    $senha    = ""; 
    $banco    = "biblioteca-unialfa";

    try {                                                    //port=8889 ou 3306
        $pdo = new PDO("mysql:host={$servidor};dbname={$banco};port=3306;charset=utf8;",$usuario,$senha);
    } catch (Exception $e) {
        echo "<p>Erro ao tentar conectar</p>";
        echo $e->getMessage();
    }