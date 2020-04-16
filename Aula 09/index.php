<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    session_start();




?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>MSQL teste</title>
    </head>
    <body>
        <form action="result.php" class="" method="POST">
            <input type="email" name="login" placeholder="E-mail" required><br><br>
            <input type="password" name="password" placeholder="Senha" required><br><br>
            <input type="submit" value="Enviar">
        </form>

        <?php
            if(isset($_SESSION["erro"])){
                echo($_SESSION["erro"]);
                unset($_SESSION["erro"]);
            }
        ?>
    </body>
</html>