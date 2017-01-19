<?php

/* 
 * Электронная информационно-образовательная среда
 * Азово-Черноморского инженерного института ФГБОУ ВО Донской ГАУ.
 * Модуль вывода методических пособий
 */

require_once("../includes/constants.php");
include("../includes/header.php");
echo '<br><br><br>';

/*подключаем xml файл*/
$xml1 = simplexml_load_file('Metod.xml');

$podpvpechat = $_GET['podpvpechat'];
$nomerzakaza = $_GET['nomerzakaza'];
$pathtofiles=PATH_FILESERVER.'metod/';

// Формируем заголовок и шапку таблицы
echo '<div class="container-fluid">';
echo '<table class="table table-bordered table-hover table-condensed"><caption>'
. '</caption>';
//echo '<thead><tr><th>№ пп</th><th>Авторы</th><th>Наименование</th><th>Год издания</th><th>Дисциплины</th><th>Просмотр (.pdf)</th></tr></thead>';
echo '<tbody>';



/*проходим циклом по xml документу*/
foreach ($xml1->uchpos as $uchpos)
{
    if($uchpos['podpvpechat']==$podpvpechat and $uchpos['nomerzakaza']==$nomerzakaza)
    {
        echo '<tr>';    
        echo '<td>';  // Авторы
        foreach ($uchpos->authors->author as $author)
        {
            echo '<p>';
            echo $author;
            echo '</p>';
        }
        echo '</td>';
        echo '<td>'.$uchpos->biblopisanie.'</td>';    // Наименование учебного пособия
        //echo '<td>'.$uchpos['year'].'</td>';  // Год издания
        echo '<td>';  // Дисциплины
        foreach ($uchpos->disciplines->discipline as $discipline)
        {
            echo ''.$discipline['disciplinename'];
            echo '<ul>';
            foreach($discipline->napravlenie as $napr)
            {
                echo '<li>';
                echo $napr;
                echo '</li>';            
            }
            echo '</ul>';
        }
        echo '</td>';
        echo '<td>';
        echo '<a href="'.$pathtofiles.$uchpos->pdffilename.'">Открыть</a>';
        echo '</td>';
        
        echo '<td>';  // Аннотация
        foreach ($uchpos->annotations->annotation as $annotation)
        {
            echo '<p>'.$annotation.'</p>';            
        }
        echo '</td>';
        
        echo '<td>';  // Оглавление
        foreach ($uchpos->contents->content as $content)
        {
            echo '<p>'.$content.' - стр. '.$content['pagenumber'].'</p>';            
        }
        echo '</td>';       
        
        
        echo '</tr>'; 
    }
}

echo '</tbody></table>';

echo '</div>';// end of class="container-fluid"

include("../includes/footer.php");