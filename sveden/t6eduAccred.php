<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Информация о сроке действия  государственной аккредитации образовательной программы, о языках, на которых осуществляется образование (обучение)</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <h1>Информация о сроке действия  государственной аккредитации образовательной программы, о языках, на которых осуществляется образование (обучение)</h1>
            <table itemprop="eduAccred" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Код</th>
                        <th>Наименование специальности, направления подготовки</th>
                        <th>Уровень образования</th>
                        <th>Срок действия государственной аккредитации (дата окончания действия свидетельства об государственной аккредитации)</th>
                        <th>Языки, на которых осуществляется образование(обучение)</th>
                      
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                      
                    </tr>
                </thead>
                <tbody>
<?php
                        /*подключаем xml файл*/
                        $xml = simplexml_load_file('data/t6eduAccred.xml');

                        foreach($xml->EduAccredBindingList->EduAccred as $curNode)
                        {
                            echo "\t\t\t\t\t".'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t".'<td itemprop="eduCode" class="text-center">'.$curNode->EduCode."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t".'<td itemprop="eduName">'.$curNode->EduName.'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t".'<td itemprop="eduLevel">'.$curNode->EduLevel.'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t".'<td itemprop="learningTerm">'.$curNode->LearningTerm.'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t".'<td itemprop="laungue">'.$curNode->Laungue.'</td>'.PHP_EOL;
                           
                          
                            echo "\t\t\t\t\t".'</tr>'.PHP_EOL;
                        }
                    ?> 
                </tbody>
            </table>
        </div>       
    </body>
</html>
