
            <h1>Таблица "Образовательная программа" (объем программы по годам)</h1>
            <table itemprop="eduOP" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Код</th>
                        <th>Наименование специальности, направления подготовки</th>
                        <th>Год начала подготовки</th>
                        <th>Профиль программы (для адаптированных образовательных программ сделать пометку "Адаптированная ОП")</th>
                        <th>Объем программы</th>
                        <th>Очная форма обучения (зачетные единицы - з.е.)</th>
                        <th>Очно-заочная форма обучения (з. е.)</th>
                        <th>Заочная форма обучения (з.е.)</th>
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
                        $xml = simplexml_load_file('../data/t11eduOPYears.xml');

                        foreach($xml->EduOPBindingList->EduOPYears as $curNode)
                        {
                            echo "\t\t\t\t\t"   .'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduCode" class="text-center">'      .$curNode->EduCode          ."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduName">'                          .$curNode->EduName          .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="godNachPodg">'                      .$curNode->GodNachPodg      .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="prophilProgr">'                     .$curNode->ProphilProgr     .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="obProgr">'                          .$curNode->ObProgr          .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="ochnForma">'                        .$curNode->OchnForma        .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="ochnZaochnForma">'                  .$curNode->OchnZaochnForma  .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="zaochnForma">'                      .$curNode->ZaochnForma     .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t"   .'</tr>'.PHP_EOL;
                        }
                    ?> 
                </tbody>
            </table>