<?php /*подключаем xml файл*/
	$xml = simplexml_load_file('../data/t21graduateJob.xml');
?>

            <h1>Информация о трудоустройстве выпускников образовательных организаций за последние 3 года</h1>
            <table itemprop="eduOP" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                       <td rowspan=2>Код</td>
                <td rowspan=2>Направление подготовки (специальности)</td>
                <?php	
					$obj = $xml->graduateJobBindingList->graduateJob;
                    echo "\t\t\t\t\t\t".'<td colspan=2> Год '.$obj->God.'</td>'.PHP_EOL;
                    echo "\t\t\t\t\t\t".'<td colspan=2> Год '.$obj->God2.'</td>'.PHP_EOL;
                    echo "\t\t\t\t\t\t".'<td colspan=2> Год '.$obj->God3.'</td>'.PHP_EOL;
				?> 
                </tr>
                <tr>
                <td>Кол-во выпускников</td>
                <td>Кол-во  трудоустроенных выпускников</td>
                <td>Кол-во выпускников</td> 
                <td>Кол-во  трудоустроенных выпускников</td>
                <td>Кол-во выпускников</td>
                <td>Кол-во  трудоустроенных выпускников</td>
                    </tr>
                
                </thead>
                <tbody>
<?php
                foreach($xml->graduateJobBindingList->graduateJob as $curNode)
                {
                    echo "\t\t\t\t\t".'<tr>'.PHP_EOL;
                    echo "\t\t\t\t\t\t".'<td itemprop="eduCode" class="text-center">'.$curNode->EduCode."</td>".PHP_EOL;
                    echo "\t\t\t\t\t\t".'<td itemprop="eduName">'.$curNode->EduName.'</td>'.PHP_EOL;

                   // echo "\t\t\t\t\t\t".'<td itemprop="god1">'.$curNode->God1.'</td>'.PHP_EOL;
                    echo "\t\t\t\t\t\t".'<td itemprop="kollvipsk1">'.$curNode->Kollvipusknikov.'</td>'.PHP_EOL;
                    echo "\t\t\t\t\t\t".'<td itemprop="kollTrudvipsk1">'.$curNode->Kolltrudoustroinihvipsknikov.'</td>'.PHP_EOL;

                    //echo "\t\t\t\t\t\t".'<td itemprop="god2">'.$curNode->God2.'</td>'.PHP_EOL;
                    echo "\t\t\t\t\t\t".'<td itemprop="kollvipsk2">'.$curNode->Kollvipusknikov2.'</td>'.PHP_EOL;
                    echo "\t\t\t\t\t\t".'<td itemprop="kollTrudvipsk2">'.$curNode->Kolltrudoustroinihvipsknikov2.'</td>'.PHP_EOL;

                   // echo "\t\t\t\t\t\t".'<td itemprop="god1">'.$curNode->God3.'</td>'.PHP_EOL;
                    echo "\t\t\t\t\t\t".'<td itemprop="kollvipsk1">'.$curNode->Kollvipusknikov3.'</td>'.PHP_EOL;
                    echo "\t\t\t\t\t\t".'<td itemprop="kollTrudvipsk1">'.$curNode->Kolltrudoustroinihvipsknikov.'</td>'.PHP_EOL;



                    echo "\t\t\t\t\t".'</tr>'.PHP_EOL;
                        }
                    ?> 
                </tbody>
            </table>