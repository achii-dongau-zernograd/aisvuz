
            <h1>Информация об администрации образовательной организации</h1>
            <table itemprop="rucovodstvo" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>№ п/п</th>                        
                        <th>Ф.И.О.</th>
                        <th>Должность</th>
                        <th>Контактные телефоны</th>
                        <th>Адреса электронной почты</th>                        
                    </tr>                    
                </thead>
                <tbody>
<?php
                        /*подключаем xml файл*/
                        $xml = simplexml_load_file('../data/t14rucovodstvo.xml');

                        $cnt=1;
                        foreach($xml->RucovodstvoBindingList->Rucovodstvo as $curNode)
                        {
                            echo "\t\t\t\t\t"   .'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td>'                         .$cnt++             ."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="fio">'          .$curNode->Fio      .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="post">'         .$curNode->Post     .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="telephone">'    .$curNode->Telephone.'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="email">'        .$curNode->Email     .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t"   .'</tr>'.PHP_EOL;
                        }
?> 
                </tbody>
            </table>