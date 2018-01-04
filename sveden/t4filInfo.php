<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Сведения о филиалах</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <h1>Сведения о филиалах</h1>
            <table itemprop="filInfo" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Наименование филиала</th>
                        <th>Адрес местонахождения филиала образовательной организации</th>
                        <th>Адрес официального сайта в сети "Интернет" (при наличии)</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                    </tr>
                </thead>
                <tbody>
<?php
                        /*подключаем xml файл*/
                        $xml = simplexml_load_file('data/t4filInfo.xml');

                        foreach($xml->FilInfoBindingList->FilInfo as $curNode)
                        {
                            echo "\t\t\t\t\t"   .'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="nameFil" class="text-center">'      .$curNode->NameFil          ."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="addressFil">'                       .$curNode->AddressFil       .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="websiteFil">'                       .$curNode->WebsiteFil       .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t"   .'</tr>'.PHP_EOL;
                        }
                    ?> 
                </tbody>
            </table>
        </div>
    </body>
</html>
