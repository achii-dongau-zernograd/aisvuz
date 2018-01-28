
            <h1>Информация о руководителях филиалов (при наличии)</h1>
            <table itemprop="rucovodstvoFil" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>№ п/п</th>
                        <th>Наименование филиала</th>
                        <th>Ф.И.О.</th>
                        <th>Должность</th>
                        <th>Контактные телефоны</th>
                        <th>Адреса электронной почты</th>                        
                    </tr>                    
                </thead>
                <tbody>
<?php
                        /*подключаем xml файл*/
                        $xml = simplexml_load_file('../data/t15rucovodstvoFil.xml');

                        $cnt=1;
                        foreach($xml->RucovodstvoFilBindingList->RucovodstvoFil as $curNode)
                        {                            
                            echo "\t\t\t\t\t"   .'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td>'                         .$cnt++             ."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="nameFil">'      .$curNode->NameFil  .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="fio">'          .$curNode->Fio      .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="post">'         .$curNode->Post     .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="telephone">'    .$curNode->Telephone.'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="email">'        .$curNode->Email     .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t"   .'</tr>'.PHP_EOL;
                        }
                        
                        if($cnt==1)
                        {
                            echo "\t\t\t\t\t"   .'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t<td colspan=6>Филиалов нет</td>".PHP_EOL;                            
                            echo "\t\t\t\t\t"   .'</tr>'.PHP_EOL;
                        }
?> 
                </tbody>
            </table>