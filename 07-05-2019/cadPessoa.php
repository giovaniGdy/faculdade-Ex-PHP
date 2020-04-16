<?PHP
include_once('conexao.php');

$login = mysqli_real_escape_string($conn, $_POST['login']);

$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$nome = mysqli_real_escape_string($conn, $_POST['nome']);

$veiculo = mysqli_real_escape_string($conn, $_POST['veiculo']);

$query = "Insert into login (login, senha, nome, veiculo) VALUES ('".$login."','".$senha."','".$nome."','".$veiculo."')";


if (!mysqli_query($conn, $query)) {
    echo($query."<br>");
    die("Falha na Conexão: ". mysqli_connect_error());
} else {
    echo("Dados Cadastrados!!!");
}

?>