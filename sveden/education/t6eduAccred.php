
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
                        $xml = simplexml_load_file('../data/t6eduAccred.xml');

                        foreach($xml->EduAccredBindingList->EduAccred as $curNode)
                        {
                            echo "\t\t\t\t\t".'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t".'<td itemprop="eduCode">'.$curNode->EduCode."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t".'<td itemprop="eduName">'.$curNode->EduName.'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t".'<td itemprop="eduLevel">'.$curNode->EduLevel.'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t".'<td itemprop="dateEnd">'.$curNode->DateEnd.'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t".'<td itemprop="language">'.$curNode->Language.'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t".'</tr>'.PHP_EOL;
                        }
                    ?> 
                </tbody>
            </table>