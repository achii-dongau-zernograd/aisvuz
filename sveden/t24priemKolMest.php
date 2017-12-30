<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <title>Информация о количестве мест для приема на обучение по различным условиям поступления</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <div class="container-fluid">
            <h1>Информация о количестве мест для приема на обучение по различным условиям поступления</h1>
            <table itemprop="priemKolMest" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th rowspan=3>Код</th>
                        <th rowspan=3>Направление подготовки (специальности)</th>
                        <th rowspan=3>Всего</th>
                        <th colspan=6>Контрольные цифры приема</th>
                        <th colspan=3 rowspan=2>По договорам об оказании платных образовательных услуг</th>
                    </tr>
                    <tr>
                        <th colspan=3>Особая квота</th>
                        <th colspan=3>Общие условия</th>
                    </tr>
                    <tr>
                        <th>Очное</th>
                        <th>Заочное</th>
                        <th>Очно-заочное</th>
                        <th>Очное</th>
                        <th>Заочное</th>
                        <th>Очно-заочное</th>
                        <th>Очное</th>
                        <th>Заочное</th>
                        <th>Очно-заочное</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                    </tr>
                </thead>
                <tbody>
<?php
                        /*подключаем xml файл*/
                        $xml = simplexml_load_file('data/priemKolMest.xml');

                        foreach($xml->PriemKolMestBindingList->PriemKolMest as $curNode)
                        {
                            echo "\t\t\t\t\t"   .'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduCode" class="text-center">'                  .$curNode->EduCode                      ."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduName">'                                      .$curNode->EduName                      .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="priemKolMestAll">'                              .$curNode->PriemKolMestAll              .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="priemKolMestQuota">'                         .$curNode->PriemKolMestQuotaOch         .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="priemKolMestQuota ">'                      .$curNode->PriemKolMestQuotaZaoch       .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="priemKolMestQuota">'                    .$curNode->PriemKolMestQuotaOchZaoch    .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="priemKolMestCommon" class="text-center">'.$curNode->PriemKolMestCommonOch        ."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="priemKolMestCommon">'                    .$curNode->PriemKolMestCommonZaoch      .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="priemKolMestCommon">'                    .$curNode->PriemKolMestCommonOchZaoch   .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td>'                                                 .$curNode->PriemKolMestPaidOch          .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td>'                                                 .$curNode->PriemKolMestPaidZaoch        .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td>'                                                 .$curNode->PriemKolMestPaidOchZaoch     .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t"   .'</tr>'.PHP_EOL;
                        }
                    ?> 
                </tbody>
            </table>
        </div>
    </body>
</html>
