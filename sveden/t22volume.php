<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Таблица "Объем образовательной деятельности"</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <h1>Таблица "Объем образовательной деятельности"</h1>
            <table itemprop="Volume" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th colspan=4 align=center>Объем образовательной деятельности, финансовое обеспечение которой осуществляется</th>
                    </tr>
                    <tr>
                        <th>за счет бюджетных ассигнований федерального бюджета (тыс. руб.)</th>
                        <th>за счет бюджетов субъектов Российской Федерации  (тыс. руб.)</th>
                        <th>за счет местных бюджетов (тыс. руб.)</th>
                        <th>по договорам об образовании за счет средств физических и (или) юридических лиц (тыс. руб.)</th>                        
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>                                               
                    </tr>
                </thead>
                <tbody>
<?php
                        /*подключаем xml файл*/
                        $xml = simplexml_load_file('data/t22volume.xml');

                        foreach($xml->VolumeBindingList->Volume as $curNode)
                        {
                            echo "\t\t\t\t\t"   .'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="finBFVolume" class="text-center">'      .$curNode->FinBFVolume          ."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="finBRVolume">'                          .$curNode->FinBRVolume          .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="finBMVolume">'                      .$curNode->FinBMVolume      .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="finPVolume">'                     .$curNode->FinPVolume     .'</td>'.PHP_EOL;                            
                            echo "\t\t\t\t\t"   .'</tr>'.PHP_EOL;
                        }
                    ?> 
                </tbody>
            </table>
        </div>
    </body>
</html>
