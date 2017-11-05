<?php

/* 
 * Электронная информационно-образовательная среда
 * Азово-Черноморского инженерного института ФГБОУ ВО Донской ГАУ.
 * Модуль вывода печатных учебных и методических пособий
 */

// Функция генерирования раздела таблицы
function GenerateRazdel($naprList,$xmlSpravNapr)
{
    $numrow=1;
    foreach($naprList as $naprKod => $numUchPos)
    {
       echo '<tr>';
        echo '<td>'.$numrow.'</td>';          // Номер строки (№ пп)

        echo '<td>';  // Код направления
        echo $naprKod;
        echo '</td>';

        echo '<td>';  //  Наименование направления
            /*проходим циклом по xml документу*/
            foreach ($xmlSpravNapr->napr as $napr)
            {
                if($napr['id']==$naprKod)
                {
                   echo $napr;
                   continue;
                }  
            }
        echo '</td>';

        echo '<td>';  //  Кол-во учебных пособий 
        echo $numUchPos;
        echo '</td>';

        echo '<td>';  //  Перечень учебных пособий по выбранному направлению 
        echo '<a href="getMetodByNapr.php?napravlenie='.$naprKod.'">Открыть</a>';
        echo '</td>';

        echo '</tr>';
        $numrow++;
    }
}



require_once("../includes/constants.php");
include("../includes/header.php");


/*подключаем xml файлы*/
$xml1 = simplexml_load_file('Metod.xml');
$xmlSpravNapr = simplexml_load_file('SpravNapr.xml');

$napravlenie = $_GET['napravlenie'];
$pathtofiles=PATH_FILESERVER.'metod/';


/*проходим циклом по xml документу*/
foreach ($xml1->uchpos as $uchpos)
{    
    foreach ($uchpos->napravleniya->napravlenie as $napr)
    {        
        $uroven_kod = substr($napr, 3, 2);
        $napr_kod=substr($napr, 0, 8);
        
        if($uroven_kod=="02")
        {
            $naprListSpo[$napr_kod]=$naprListSpo[$napr_kod]+1;
        }
        if($uroven_kod=="03")
        {
            $naprListVoBak[$napr_kod]=$naprListVoBak[$napr_kod]+1;
        }
        if($uroven_kod=="04")
        {
            $naprListVoMag[$napr_kod]=$naprListVoMag[$napr_kod]+1;
        }
        if($uroven_kod=="05")
        {
            $naprListVoSpec[$napr_kod]=$naprListVoSpec[$napr_kod]+1;
        }
        if($uroven_kod=="06")
        {
            $naprListVoAsp[$napr_kod]=$naprListVoAsp[$napr_kod]+1;
        }
     
    }
}


echo '<div class="container">';
echo '<h1>Количество учебных пособий</h1>';




// Формируем заголовок и шапку таблицы
echo '<table class="table table-bordered table-hover table-condensed">'
. '<caption>'
. '</caption>'
. '<thead>'
. '<tr><th>№ пп</th><th>Код направления</th><th>Наименование направления</th><th>Кол-во учебных пособий</th><th>Перечень учебных пособий по выбранному направлению</th></tr>'
. '</thead>'
. '<tbody>';

echo '<tr><th colspan=5>Среднее профессиональное образование</th></tr>';
GenerateRazdel($naprListSpo,$xmlSpravNapr);

echo '<tr><th colspan=5>Высшее образование - бакалавриат</th></tr>';
GenerateRazdel($naprListVoBak,$xmlSpravNapr);

echo '<tr><th colspan=5>Высшее образование - магистратура</th></tr>';
GenerateRazdel($naprListVoMag,$xmlSpravNapr);

echo '<tr><th colspan=5>Высшее образование - специалитет</th></tr>';
GenerateRazdel($naprListVoSpec,$xmlSpravNapr);

echo '<tr><th colspan=5>Высшее образование - подготовка кадров высшей квалификации</th></tr>';
GenerateRazdel($naprListVoAsp,$xmlSpravNapr);

echo '</tbody></table>';

echo '</div>';// end of class="container-fluid"

include("../includes/footer.php");
