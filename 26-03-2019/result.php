<?php

$login = $_POST["email"];
$senha = $_POST["senha"];

$server = "localhost";
$usr = "root";
$senha = "";
$database = "login";

$conn = mysqli_connect($server, $usr, $senha, $database);

if (!$conn) {
    die("Ops! Ocorreu um erro: " . mysqli_connect_error());
} else {
    echo ("A conexão foi um sucesso!" . "<br>");
}

$query = "Select * FROM login WHERE login = '$login' and pw ='$senha'";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo ('OK' . "<br>");
    header('location: pagina.php');
} else {
    $_SESSION['erro'] = 'Usuário ou Senha Inválido';
    header('location:index.php');
}

echo "E-mail Cadastrado: " . $login . "<br>";
echo "Senha Cadastrada: " . $senha . "<br>";
