<?PHP session_start();

    $login = $_POST['email'];
    $senha = $_POST['senha'];

    if($login == "teste@gmail.com" && $senha == "testando") {
        echo("OLÁÁÁÁÁÁÁ! Bem-Vindo Teste");
    } else {
        echo("Deu Ruim!");
        $_SESSION['erro'] = "Erro via Sessão!";
        header("location:index.php?");
    }

?>