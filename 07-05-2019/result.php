<?PHP
session_start();

include_once('conexao.php');

$login = mysqli_real_escape_string($conn, $_POST["login"]);
$senha = mysqli_real_escape_string($conn, $_POST["password"]);

$query = "Select * FROM login WHERE login = '$login' and senha ='$senha'";

$result = mysqli_query($conn, $query);



if (mysqli_num_rows($result) > 0) {
    echo ('OK' . "<br>");
    $dados = mysqli_fetch_array($result);
    $_SESSION['emailLogin'] = $dados['login'];
    header('location:altPessoa.php');
    
    // print_r($dados);
} else {
    $_SESSION['erro'] = 'Usuário ou Senha Inválido';
    header('location:index.php');
}



echo "E-mail Cadastrado: " . $dados['login'] . "<br>";
echo "Senha Cadastrada: " . $dados['senha'] . "<br>";
echo "Nome Cadastrado: " . $dados['nome'] . "<br>";
echo "Veiculo Cadastrado: " . $dados['veiculo'] . "<br>";

?>