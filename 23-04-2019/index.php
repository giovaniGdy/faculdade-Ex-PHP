<?PHP
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="post" action="#">
            <input type="text" name="veiculo">
            <input type="submit" name="acelerar" value="acelerar">
            <input type="submit" name="frear" value="frear">
            <input type="submit" name="resetar" value="resetar">
        </form>
        <?PHP

            //inclusão da classe carro
            include_once('carro.php');

            
            //instanciando o objeto a classe carro utilizando a palavra NEW e dando o nome para o objeto de carroEscolhido
//            $carroEscolhido = new carro();
            
            if(!isset($_SESSION['carroEscolhido'])){
                $veiculo = new carro();
                $_SESSION['carroEscolhido'] = serialize($veiculo);
                //print_r($veiculo);
            
            if(isset($_POST['veiculo']))
            {
                $ha = $_POST['veiculo'];
                $veiculo = unserialize($_SESSION['carroEscolhido']);
                $veiculo->setModelo($ha);
                $_SESSION['carroEscolhido'] = serialize($veiculo);
            }
                
            } 
            if(isset($_POST['acelerar']))
            {
                $veiculo = unserialize($_SESSION['carroEscolhido']);
                $veiculo->acelerar();
                echo($veiculo->getModelo().' >> ');
                echo($veiculo->getVelocidade().' Km/h');
                $_SESSION['carroEscolhido'] = serialize($veiculo);
            }

            if(isset($_POST['frear']))
            {
                $veiculo = unserialize($_SESSION['carroEscolhido']);
                $veiculo->frear();
                echo($veiculo->getModelo().' >> ');
                echo($veiculo->getVelocidade().' Km/h');
                $_SESSION['carroEscolhido'] = serialize($veiculo);
            }

            if(isset($_POST['resetar']))
            {
                unset($_SESSION['carroEscolhido']);
            }
        ?>
    </body>
</html>