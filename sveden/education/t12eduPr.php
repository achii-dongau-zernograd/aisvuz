
            <h1>Таблица "Образовательная программа" (наличие практики)</h1>
            <table itemprop="eduPr" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th rowspan=2>Код</th>
                        <th rowspan=2>Наименование специальности, направления подготовки</th>
                        <th rowspan=2>Год начала подготовки</th>
                        <th rowspan=2>Профиль программы</th>
                        <th rowspan=2>Реализуемые формы обучения</th>
                        <th colspan=3>Наличие практики (з.е.)</th>
                    </tr>
                    <tr>
                        <th>учебная</th>
                        <th>производственная</th>
                        <th>преддипломная практика для выполнения выпускной квалификационной работы</th>
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
                        $xml = simplexml_load_file('../data/t12eduPr.xml');

                        foreach($xml->EduPrBindingList->EduPr as $curNode)
                        {
                            echo "\t\t\t\t\t"   .'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduCode" class="text-center">'      .$curNode->EduCod          ."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduName">'                          .$curNode->EduName         .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="godNachPodg">'                      .$curNode->GodNachPodg     .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="profilProgr">'                      .$curNode->ProfilProgr     .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduForm">'                          .$curNode->EduForm         .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduPrUcheb">'                       .$curNode->EduPrUcheb      .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduPrProizv">'                      .$curNode->EduPrProizv     .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduPrPreddipl">'                    .$curNode->EduPrPreddipl   .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t"   .'</tr>'.PHP_EOL;
                        }
                    ?> 
                </tbody>
            </table>