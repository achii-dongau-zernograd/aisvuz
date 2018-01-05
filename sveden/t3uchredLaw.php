<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Сведения об учредителях</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <h1>Сведения об учредителях</h1>
            <table itemprop="uchredLaw" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Наименование учредителя</th>
                        <th>Фамилия, имя, отчество руководителя учредителя (ей) образовательной организации</th>
                        <th>Адрес местонахождения учредителя(ей)</th>
                        <th>Контактные телефоны</th>
                        <th>Адрес электронной почты</th>
                        <th>Адрес сайта учредителя(ей) в сети "Интернет"</th>
                    </tr>                    
                </thead>
                <tbody>
<?php
                        /*подключаем xml файл*/
                        $xml = simplexml_load_file('data/t3uchredLaw.xml');

                        foreach($xml->UchredLawBindingList->UchredLaw as $curNode)
                        {
                            echo "\t\t\t\t\t"   .'<tr>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="nameUchred">'     .$curNode->NameUchred      ."</td>".PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="fullnameUchred">' .$curNode->FullnameUchred  .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="addressUchred">'  .$curNode->AddressUchred   .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="telUchred">'      .$curNode->TelUchred       .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="mailUchred">'     .$curNode->MailUchred      .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t\t" .'<td itemprop="websiteUchred">'  .$curNode->WebsiteUchred   .'</td>'.PHP_EOL;
                            echo "\t\t\t\t\t"   .'</tr>'.PHP_EOL;
                        }
                    ?> 
                </tbody>
            </table>
        </div>
    </body>
</html>
