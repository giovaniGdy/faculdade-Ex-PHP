<?PHP

error_reporting(E_ALL);
ini_set('display_errors', 1);

$login = $_POST["login"];
$senha = $_POST["password"];

$server = "localhost";
$usr = "root";
$senha = "";
$database = "login";

$conn = mysqli_connect($server, $usr, $senha, $database);

if (!$conn) {
    die("Connection Fail: " . mysqli_connect_error());
} else {
    echo ("Connection Successful!" . "<br>");
}

$query = "Select * FROM login WHERE login = '$login' and pw ='$senha'";

$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
    echo ('OK' . "<br>");
    header('location: cabecalho.php');
} else {
    $_SESSION['erro'] = 'Usuário ou Senha Inválido';
    header('location:index.php');
}


echo "E-mail Cadastrado: " . $login . "<br>";
echo "Senha Cadastrada: " . $senha . "<br>";
