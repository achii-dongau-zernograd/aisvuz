<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Таблица "Образование" (Информация о результатах перевода, восстановления и отчисления)</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <h1>Таблица "Образование" (Информация о результатах перевода, восстановления и отчисления)</h1>
            <table itemprop="eduPerevod" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Код</th>
                        <th>Наименование специальности, направления подготовки</th>
                        <th>Уровень образования</th>
                        <th>Форма обучения</th>
                        <th>Численность обучающихся, переведенных в другие образовательные организации</th>
                        <th>Численность обучающихся, переведенных из других образовательных организаций</th>
                        <th>Численность восстановленных обучающихся</th>
                        <th>Численность отчисленных обучающихся</th>
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
                    </tr>
                </thead>
                <tbody>
<?php
                        /*подключаем xml файл*/
                        $xml = simplexml_load_file('data/eduPerevod.xml');

                        foreach($xml->EduPerevodBindingList->EduPerevod as $curNode)
                        {
                            echo "\t\t\t\t\t"   .'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduCode" class="text-center">'   .$curNode->EduCode          ."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduName">'                       .$curNode->EduName          .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduLevel">'                      .$curNode->EduLevel         .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduForm">'                       .$curNode->EduForm          .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="numberOutPerevod">'              .$curNode->NumberOutPerevod .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="numberToPerevod">'               .$curNode->NumberToPerevod  .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="numberResPerevod">'              .$curNode->NumberResPerevod .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="numberExpPerevod">'              .$curNode->NumberExpPerevod .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t"   .'</tr>'.PHP_EOL;
                        }
                    ?> 
                </tbody>
            </table>
        </div> 
    </body>
</html>
