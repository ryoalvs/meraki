<?php

require_once 'connect.php';

$email = $_POST['email'];   
$password = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE email = '$email' and senha = md5('$password')";

$result = $conn->query($query);
$row = $result->fetch_assoc();

var_dump($_POST);

/*if ($result->num_rows > 0) {
    $_SESSION['usuario'] = $row['nome'];
    header('Location: ../index.php');
    exit();
} else {
    header('Location: ../login.php');
    exit();
}*/

?>