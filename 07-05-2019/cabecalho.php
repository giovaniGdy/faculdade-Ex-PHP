<?PHP

session_start();

include_once('conexao.php');

$login = mysqli_real_escape_string($conn, $_GET["login"]);

$query = "Select * FROM login WHERE login = '$login'";

$result = mysqli_query($conn, $query);


    echo($login);







?>