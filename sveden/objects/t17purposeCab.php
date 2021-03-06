            <h1>Cведения о наличии оборудованных учебных кабинетов, объектов для проведения практических занятий</h1>
            <table itemprop="purposeCab" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Код</th>
                        <th>Наименование специальности, направления подготовки</th>
                        <th>Наименование дисциплины (модуля), практик в соответствии с учебным планом</th>
                        <th>Наименование специальных помещений и помещений для самостоятельной работы</th>
                        <th>Оснащенность специальных помещений и помещений для самостоятельной работы</th>
                        <th>Приспособленность помещений для использования инвалидами и лицами с ограниченными возможностями здоровья</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                    </tr>
                </thead>
                <tbody>
<?php
                        /*подключаем xml файл*/
                        $xml = simplexml_load_file('../data/t17purposeCab.xml');

                        foreach($xml->PurposeCabBindingList->PurposeCab as $curNode)
                        {
                            echo "\t\t\t\t\t"   .'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduCode" class="text-center">'  .$curNode->EduCode          ."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduName">'                      .$curNode->EduName          .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="adEduDisiPr">'                  .$curNode->AdEduDisiPr      .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="nameCabSr">'                    .$curNode->NameCabSr        .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="purposeCabSr">'                 .$curNode->PurposeCabSr     .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="purposeCabOvz">'                 .$curNode->PurposeCabOvz   .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t"   .'</tr>'.PHP_EOL;
                        }
                    ?> 
                </tbody>
            </table>