<?php

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'livraria';

    $conn = new mysqli($server, $user, $pass, $database) or die("Erro: ".$conn -> connect_error);

?>