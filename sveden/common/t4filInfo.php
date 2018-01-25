            <h1>Сведения о филиалах</h1>
            <table itemprop="filInfo" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Наименование филиала</th>
                        <th>Адрес местонахождения филиала образовательной организации</th>
                        <th>Адрес официального сайта в сети "Интернет" (при наличии)</th>
                    </tr>                    
                </thead>
                <tbody>
<?php
                        /*подключаем xml файл*/
                        $xml = simplexml_load_file('../data/t4filInfo.xml');
                        $cnt=0;
                        foreach($xml->FilInfoBindingList->FilInfo as $curNode)
                        {
                            $cnt++;
                            echo "\t\t\t\t\t"   .'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="nameFil" class="text-center">'      .$curNode->NameFil          ."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="addressFil">'                       .$curNode->AddressFil       .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="websiteFil">'                       .$curNode->WebsiteFil       .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t"   .'</tr>'.PHP_EOL;
                        }
                        if($cnt==0)
                        {
                            echo "\t\t\t\t\t"   .'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td colspan="3" itemprop="nameFil" class="text-center">Филиалов нет</td>'.PHP_EOL;                            
                            echo "\t\t\t\t\t"   .'</tr>'.PHP_EOL;
                        }
                            
                    ?> 
                </tbody>
            </table>