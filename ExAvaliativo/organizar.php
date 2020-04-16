<?php
include_once('Sensor.php');   //Incluindo o array Sensor.php


$numeroDiv = 0;     //Variável que criei para numerar as divs de cada fruta do array


foreach ($sensorMadura as $teste) {
    $Frutas = ($teste[0]);          ///////////////
    $Tipo = ($teste[1]);            //  Aqui resolvi separar os dados do array, assim fica mais fácil de manipular os dados e as chances de confundir com os '[0][1][1]'
    $R = ($teste[2]);               //então adicionei cada dado do array dentro de uma variável...
    $G = ($teste[3]);               //
    $B = ($teste[4]);               ///////////////

    
    echo ('<div id =\'Fruta' . $numeroDiv . '\'');          ///////////////
    echo ('<br>');                                          //    Aqui o php está criando no HTML uma div para cada uma das frutas e numerando cada uma delas usando a variável $numeroDiv, 
    echo ('--------------------------------------------');  //depois ele está escrevendo os dados do Array: o nome da Fruta, e eu troquei 'Tipo' por 'Status', achei que ficaria mais
    echo ('<br>');                                          //correto dessa maneira e de melhor entendimento. E colocando um 'divisor' = ('--------------------')
    echo ('<b>Fruta: </b>');                                //
    if ($Frutas == 'Maca') {                                ///////////////
        echo ('Maçã');                                      
    } else {                                                
        print_r($Frutas);
    }

    echo ('<br>');
    echo ('<b>Status: </b>');
    if ($Tipo == 'T1') {
        if ($R >= 200 & $G >= 200 & $B <= 150) {
            echo ('Maduro(a)');
        } elseif ($R <= 100 & $G <= 50 & $B <= 30) {        ///////////////
            echo ('Podre');                                 //
        } else {                                            //  Esses if's tem praticamente a mesma função dos que estão abaixo, eles irão ler a cor das frutas e de acordo com o tipo,
            echo ('Verde');                                 //mostrarão o 'Status' da fruta, se está Verde ou madura.
        }                                                   //
    } elseif ($Tipo == 'T2') {                              ///////////////
        if ($R >= 100 & $G <= 100 & $B <= 100) {
            echo ('Maduro(a)');
        } elseif ($R >= 200 & $G <= 200 & $B <= 200) {
            echo ('Maduro(a)');
        } elseif ($R <= 100 & $G <= 50 & $B <= 30) {
            echo ('Podre');
        } else {
            echo ('Verde');
        }
    }

        echo ('<br>');
        echo ('<b>Cor: </b>');
        if ($Frutas == 'Maca') {
            if ($R >= 200 & $G <= 30 & $B <= 30) {
                echo ('Vermelho');
                echo ('<br>');
                echo ('<img src="img/Produtos/maçãVermelha.png">');                 ///////////////
            } elseif ($R >= 100 & $G <= 30 & $B <= 30) {                            //
                echo ('Vermelho');                                                  //  As cores, no lugar de mostrar RGB, utilizei os if's para que escrevam a cor em questão.
                echo ('<br>');                                                      //  
                echo ('<img src="img/Produtos/maçãVermelha.png">');                 //
            } elseif ($R >= 200 & $G <= 200 & $B <= 200) {                          //  Os if's estam funcionando da seguinte maneira: primeiro eles leem qual Fruta é: 'Maca', 'Pera', 'Tomate'
                echo ('Avermelhada');                                               //ou 'Banana', depois existem vários outros if's que iram fazer a leitura das cores em RGB e determinar se a
                echo ('<br>');                                                      //fruta está Madura ou Verde e também as cores delas: Verde, Vermelha, Amarela, Marrom(podre no caso), até
                echo ('<img src="img/Produtos/maçãVermelhoClaro.png">');            // mesmo esverdeada e avermelhada, e de acordo com sua cor irá mostrar uma imagem do estado da fruta.
            } elseif ($R <= 30 & $G >= 200 & $B <= 30) {                            //
                echo ('Verde');                                                     ///////////////
                echo ('<br>');
                echo ('<img src="img/Produtos/maçãVerde.png">');
            } elseif ($R <= 30 & $G >= 100 & $B <= 30) {
                echo ('Esverdeada');
                echo ('<br>');
                echo ('<img src="img/Produtos/maçãVerdeClaro.png">');                 // MAÇÃS
            } elseif ($R <= 200 & $G >= 190 & $B <= 200) {
                echo ('Esverdeada');
                echo ('<br>');
                echo ('<img src="img/Produtos/maçãVerdeClaro.png">');
            } elseif ($R >= 200 & $G >= 200 & $B <= 30) {
                echo ('Amarelada');
                echo ('<br>');
                echo ('<img src="img/Produtos/maçãAmarela.png">');
            }
        } elseif ($Frutas == 'Banana') {
            if ($R >= 200 & $G >= 200 & $B <= 100) {
                echo ('Amarela');
                echo ('<br>');
                echo ('<img src="img/Produtos/bananaAmarela.png">');
            } elseif ($R <= 50 & $G >= 100 & $B <= 30) {
                echo ('Verde');                                                      //BANANA
                echo ('<br>');
                echo ('<img src="img/Produtos/bananaVerde.png">');
            } elseif ($R <= 100 & $G <= 50 & $B <= 30) {
                echo ('Marrom');
                echo ('<br>');
                echo ('<img src="img/Produtos/bananaMarrom.png">');
            }
        } elseif ($Frutas == 'Pera') {
            if ($R >= 200 & $G >= 200 & $B <= 200) {
                echo ('Amarela');
                echo ('<br>');
                echo ('<img src="img/Produtos/peraAmarela.png">');
            } elseif ($R <= 50 & $G >= 200 & $B <= 50) {
                echo ('Verde');                                                     //PERA
                echo ('<br>');
                echo ('<img src="img/Produtos/peraVerde.png">');
            } elseif ($R <= 100 & $G >= 200 & $B <= 100) {
                echo ('Verde');
                echo ('<br>');
                echo ('<img src="img/Produtos/peraVerdeClaro.png">');
            }
        } elseif ($Frutas == 'Tomate') {
            if ($R >= 200 & $G <= 200 & $B <= 200) {
                echo ('Vermelho');
                echo ('<br>');
                echo ('<img src="img/Produtos/tomateVermelho.png">');
            } elseif ($R >= 70 & $G <= 30 & $B <= 30) {
                echo ('Vermelho');
                echo ('<br>');
                echo ('<img src="img/Produtos/tomateVermelho.png">');
            } elseif ($R <= 50 & $G >= 200 & $B <= 50) {
                echo ('Verde');                                                     //TOMATE
                echo ('<br>');
                echo ('<img src="img/Produtos/tomateVerde.png">');
            } elseif ($R <= 200 & $G >= 190 & $B <= 200) {
                echo ('Verde');
                echo ('<br>');
                echo ('<img src="img/Produtos/tomateVerde.png">');
            } elseif ($R <= 30 & $G >= 100 & $B <= 30) {
                echo ('Verde');
                echo ('<br>');
                echo ('<img src="img/Produtos/tomateVerde.png">');
            }
        }
        echo ('<br>');
        echo ('R: '.$R.' | G: '.$G.' | B: '.$B);                        //Aqui adiciono informações adicionais e uma 'divisão' para melhorar a visualização ('----------------')
        echo ('<br>');
        echo ('--------------------------------------------');
        echo ('</div>');
        
        echo ('<br>');

        $numeroDiv++;
    }