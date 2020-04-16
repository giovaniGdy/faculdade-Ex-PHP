<!DOCTYPE html>                         <!--GIOVANI A. GODOY  |  RA: 18001631-->
<?PHP include_once('Sensor.php') ?>

<html>
    
<head>                                                                    <!--  HEAD - possui título, link pro css e um link pro ícone do site no navegador; -->
    <meta charset="utf-8">
    <title>Hortifruti Das Maçãs</title>
    <link rel="sortcut icon" href="img/maçã.png" type="image/x-icon" />
    <link type="text/css" href="style.css" rel="stylesheet">

</head>

<body>
    <header>                                                              <!--  HEADER - possui uma DIV com telefone e outra com uma imagem logo que fiz; -->
        <div class="informacoes">
            <b>Telefone: (19) 90000-0000</b>
        </div>

        <div class='hortiLogo'>
            <img src="img/logoHorti.png" style="width: 100%;">
        </div>


    </header>

    <nav class="navBar">                                                 <!-- navBar - BARRA DE NAVEGAÇÃO -->
        <ul>
            <a href="#Produtos"><li>Frutas</a></li>
            <a href="#contato"><li>Contato</a></li>
            <a href="#sobreNos"> <li>Sobre Nós</a></li>
        </ul>
    </nav>



    <div class='Produtos' id="Produtos">        <!-- Produtos - AQUI ESTOU CHAMANDO O ARQUIVO organizar.php que vai realizar a leitura do array Sensor.php -->

        <?php include('organizar.php'); ?>
                            
    </div>

    <div class="SobreNos" id="sobreNos">
        <h1>SOBRE NÓS</h1>                                                                  <!-- SobreNos - Texto 'Sobre Nós pra encher linguiça' -->
        <p><b>  Somos uma empresa dedicada ao seu bem estar, com as melhores frutas
            para você e sua família, nossa loja foi fundada em 2009 com o intuito de
            trazer ao público ótimas promoções para que a saúde de todos possa melhorar.
            ;)
    </b></p>

    </div>

    <footer>

        <div class="Contato" id="contato">                      <!-- Footer - Dados de contato e uma imagem pra decoração -->
            <p><b>São João da Boa Vista</b></p>
            <p><b>HortifrutidasMaças@gmail.com</b></p>
            <p><b>Telefone: (19) 90000-0000</b></p>
        </div>
        <div class="imgContato">
            <img src="img/contatos.png">
        </div>
    
    </footer>


</body>

</html>