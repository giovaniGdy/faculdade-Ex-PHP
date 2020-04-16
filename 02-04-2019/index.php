<?PHP session_start(); //inicia a sessão
    //  session_cache_expire(5); //sessão dura 5 minutos
      $Nome = "Nome Teste";
      $_SESSION['Nome'] = $Nome;
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>

        <style type="text/css">
            body{margin: 0; padding: 0;}
            header{width:100%; height: 120px;}
            .logo{width: 70%; height: 100%; float: left; background-color: aqua;}
            .login{width: 30%; height: 100%; float: left; background-color: lightblue;}  
        </style>
    </head>

<body>
    <?PHP
        include_once('cabecalho.php')
    ?>
    <header>
        <div class="logo">
        
        </div>

        <div class="login">
            <?PHP
                echo("Sessão: ".$_SESSION['Nome']);
            ?>
            <form action="result.php" method="post">
            <label>Login:</label>
            <input type="email" name="email">
            <br/>
            <label>Senha:</label>
            <input type="password" name="senha">
            <br/>
            <input type="submit" value="Entrar">
            </form>
            <?PHP
                if(isset($_SESSION["erro"])){
                    echo($_SESSION["erro"]);
                    unset($_SESSION["erro"]);
                }
            ?>
        </div>
    </header>
</body>
</html>