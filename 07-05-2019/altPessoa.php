<?PHP
session_start();

include_once('conexao.php');

$login = $_SESSION['emailLogin'];

echo($login);

?>