            <h1>Информация о количестве вакантных мест для приёма (перевода)</h1>
            <table itemprop="vacant" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th rowspan=2>Код</th>
                        <th rowspan=2>Наименование</th>
                        <th rowspan=2>Уровень образования</th>
                        <th rowspan=2>Курс</th>
                        <th rowspan=2>Форма обучения (очная/заочная/очно-заочная)</th>
                        <th colspan=4>Количество вакантных мест для приема (перевода) на места, финансируемые за счет</th>
                    </tr><tr>
                        <th>бюджетных ассигнований федерального бюджета</th>
                        <th>бюджетов субъектов Российской Федерации</th>
                        <th>местных бюджетов</th>
                        <th>по договорам об образовании и за счет средств физических и (или) юридических лиц</th>
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
                    </tr>
                </thead>
                <tbody>
<?php
                        /*подключаем xml файл*/
                        $xml = simplexml_load_file('../data/t23vacant.xml');

                        foreach($xml->VacantBindingList->Vacant as $curNode)
                        {
                            echo "\t\t\t\t\t"   .'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduCode" class="text-center">'      .$curNode->EduCode          ."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="nameProgVacant">'                          .$curNode->NameProgVacant         .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduLevelVacant">'                      .$curNode->EduLevelVacant      .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="numberKurs">'                           .$curNode->NumberKurs          .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduForm">'                          .$curNode->EduForm         .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="numberBFVacant">'                      .$curNode->NumberBFVacant     .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="numberBRVacant">'                       .$curNode->NumberBRVacant      .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="numberBMVacant">'                      .$curNode->NumberBMVacant     .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="numberPVacant">'                        .$curNode->NumberPVacant       .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t"   .'</tr>'.PHP_EOL;
                        }
                    ?> 
                </tbody>
            </table>