<?php

require_once 'connect.php';

$name = $_POST['nome'];
$surname = $_POST['sbNome'];
$mail = $_POST['email'];
$pass = $_POST['senha'];
$cpf = $_POST['cpf'];
$tell = $_POST['tell'];

$sql = "INSERT INTO usuários (cpf, nome, sobrenome, email, senha, telefone) VALUES ('$cpf', '$name', '$surname', '$mail', md5('$pass'), '$tell')";

if ($conn->query($sql))
    header("Location: ../login.php");
else
    echo "Error: " . $sql . "<br>" . $conn->error;

?>