<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Таблица "Образовательная программа" (направления и результаты НИР)</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <h1>Таблица "Образовательная программа" (направления и результаты НИР)</h1>
            <table itemprop="eduNir" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Код</th>
                        <th>Наименование специальности, направления подготовки</th>
                        <th>Перечень научных направлений, в рамках которых ведется научная (научно-исследовательская) деятельность</th>
                        <th>Количество НПР, принимающих участие в научной (научно-исследовательской) деятельности</th>
                        <th>Количество студентов, принимающих участие в научной (научно-исследовательской) деятельности</th>
                        <th>Количество изданных монографий научно-педагогических работников образовательной организации по всем научным направлениям за последний год</th>
                        <th>Количество изданных и принятых к публикации статей в изданиях, рекомендованных ВАК/зарубежных для публикации научных работ за последний год</th>
                        <th>Количество патентов, полученных на разработки за последний год: российских/зарубежных</th>
                        <th>Количество сивдетельств о регистрации объекта интеллектуальной собственности, выданных на разработки за последний год: российских/зарубежных</th>
                        <th>Среднегодовой объем финансирования научных исследований на одного научно-педагогического работника организации (в приведенных к целочисленным значениям ставок)</th>
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
                    </tr>
                </thead>
                <tbody>
<?php
                        /*подключаем xml файл*/
                        $xml = simplexml_load_file('data/t13eduNir.xml');

                        foreach($xml->EduNirBindingList->EduNir as $curNode)
                        {
                            echo "\t\t\t\t\t"   .'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduCode" class="text-center">'      .$curNode->EduCod          ."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduName">'                          .$curNode->EduName         .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="perechenNir">'                      .$curNode->PerechenNir      .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="nprNir">'                           .$curNode->NprNir          .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="studNir">'                          .$curNode->StudNir         .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="monografNir">'                      .$curNode->MonografNir     .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="articleNir">'                       .$curNode->ArticleNir      .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="patentRZNir">'                      .$curNode->PatentRZNir     .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="svidRZNir">'                        .$curNode->SvidRZNir       .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="financeNir">'                       .$curNode->FinanceNir      .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t"   .'</tr>'.PHP_EOL;
                        }
?> 
                </tbody>
            </table>
        </div>
    </body>
</html>

