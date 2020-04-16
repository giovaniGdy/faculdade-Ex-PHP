<?PHP

$server = "localhost";
$usr = "root";
$senha = "";
$database = "login";


$conn = mysqli_connect($server, $usr, $senha, $database);


if (!$conn) {
    die("Conexão falhou! " . mysqli_connect_error());
} else {
    echo ("Conectado!" . "<br>");
}

?>