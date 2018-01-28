            <h1>Информация по образовательным программам, в том числе адаптированным</h1>
            <table itemprop="eduOP" class="table table-bordered table-hover table-striped text-center">
                <thead>
                    <tr>
                        <th>Код</th>
                        <th>Наименование специальности, направления подготовки</th>
                        <th>Уровень образования</th>
                        <th>Реализуемые формы обучения</th>
                        <th>Ссылка на описание образовательной программы с приложением ее копии </th>
                        <th>Ссылка на учебный план с приложением его копии</th>
                        <th>Ссылка на аннотации к рабочим программам дисциплин (по каждой дисциплине в составе образовательной программы) с приложением их копий</th>
                        <th>Ссылка на календарный учебный график с приложением его копии</th>
                        <th>Ссылка на методические и иные документы, разработанные образовательной организацией для обеспечения образовательного процесса</th>
                        <th>Использование при реализации образовательных программ электронного обучения и дистанционных образовательных технологий</th>
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
                        <th>10</th>
                    </tr>
                </thead>
                <tbody>
<?php
                        /*подключаем xml файл*/
                        $xml = simplexml_load_file('../data/t10eduOP.xml');
                        $dataDirectory="data/";

                        foreach($xml->EduOPBindingList->EduOP as $curNode)
                        {                            
                            echo "\t\t\t\t\t"   .'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduCode">'                          .$curNode->EduCode          ."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduName">'                          .$curNode->EduName          .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduLevel">'                         .$curNode->EduLevel         .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduForm">'                          .$curNode->EduForm          .'</td>'.PHP_EOL;
                            if($curNode->IsAdopt=="false")
                            {
                                echo "\t\t\t\t\t\t" .'<td itemprop="opMain"><a href ="'             .$dataDirectory.$curNode->OpMain           .'">Открыть</a></td>'.PHP_EOL;
                                if($curNode->EducationPlan=="Представлено в составе образовательной программы")
                                {
                                   echo "\t\t\t\t\t\t" .'<td itemprop="educationAnnotation">Представлено в составе образовательной программы</td>'.PHP_EOL;
                                }
                                else
                                {
                                   echo "\t\t\t\t\t\t" .'<td itemprop="educationPlan"><a href ="'   .$dataDirectory.$curNode->EducationPlan    .'">Открыть</a></td>'.PHP_EOL; 
                                }                                
                                echo "\t\t\t\t\t\t" .'<td itemprop="educationAnnotation"><a href ="'.$dataDirectory.$curNode->EducationAnnotation  .'">Открыть</a></td>'.PHP_EOL;
                                
                                if($curNode->EducationShedule=="Представлено в составе образовательной программы")
                                {
                                    echo "\t\t\t\t\t\t" .'<td itemprop="educationShedule">Представлено в составе образовательной программы</td>'.PHP_EOL;
                                }
                                else
                                {
                                    echo "\t\t\t\t\t\t" .'<td itemprop="educationShedule"><a href ="'.$dataDirectory.$curNode->EducationShedule .'">Открыть</a></td>'.PHP_EOL;
                                }
                                
                                echo "\t\t\t\t\t\t" .'<td itemprop="methodology"><a href ="'        .$dataDirectory.$curNode->Methodology      .'">Открыть</a></td>'.PHP_EOL;
                            }
                            else 
                            {
                                echo "\t\t\t\t\t\t" .'<td itemprop="adOpMain"><a href ="'             .$dataDirectory.$curNode->OpMain           .'">Открыть</a></td>'.PHP_EOL;
                                if($curNode->EducationPlan=="Представлено в составе образовательной программы")
                                {
                                   echo "\t\t\t\t\t\t" .'<td itemprop="adEducationAnnotation">Представлено в составе образовательной программы</td>'.PHP_EOL;
                                }
                                else
                                {
                                   echo "\t\t\t\t\t\t" .'<td itemprop="adEducationPlan"><a href ="'   .$dataDirectory.$curNode->EducationPlan    .'">Открыть</a></td>'.PHP_EOL; 
                                }                                
                                echo "\t\t\t\t\t\t" .'<td itemprop="adEducationAnnotation"><a href ="'.$dataDirectory.$curNode->EducationAnnotation  .'">Открыть</a></td>'.PHP_EOL;
                                
                                if($curNode->EducationShedule=="Представлено в составе образовательной программы")
                                {
                                    echo "\t\t\t\t\t\t" .'<td itemprop="adEducationShedule">Представлено в составе образовательной программы</td>'.PHP_EOL;
                                }
                                else
                                {
                                    echo "\t\t\t\t\t\t" .'<td itemprop="adEducationShedule"><a href ="'.$dataDirectory.$curNode->EducationShedule .'">Открыть</a></td>'.PHP_EOL;
                                }
                                
                                echo "\t\t\t\t\t\t" .'<td itemprop="adMethodology"><a href ="'        .$dataDirectory.$curNode->Methodology      .'">Открыть</a></td>'.PHP_EOL;
                            }
                            
                            echo "\t\t\t\t\t\t" .'<td itemprop="eduEl">'                            .$curNode->EduEl            .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t"   .'</tr>'.PHP_EOL;
                        }                    
                    ?>
                </tbody>
            </table>