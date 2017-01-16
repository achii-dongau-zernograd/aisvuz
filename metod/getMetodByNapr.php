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

$napravlenie = $_GET['napravlenie'];
$pathtofiles=PATH_FILESERVER.'metod/';

// Формируем заголовок и шапку таблицы
echo '<div class="container-fluid">';
echo '<table class="table table-bordered table-hover table-condensed"><caption>'
. "Направление подготовки: ".$napravlenie."<br>"
. '</caption>';
echo '<thead><tr><th>№ пп</th><th>Авторы</th><th>Наименование</th><th>Год издания</th><th>Дисциплины</th><th>Просмотр (.pdf)</th></tr></thead><tbody>';

$numrow=1;

/*проходим циклом по xml документу*/
foreach ($xml1->uchpos as $uchpos)
{
    // Если направление не соответствует,
    // переходим к следующему пособию
    $isNapr=false;
    foreach ($uchpos->napravleniya->napravlenie as $napr)
    {
        if($napravlenie==$napr)
            $isNapr=true;
    }
    if($isNapr==false)
        continue;
    
    echo '<tr>';
    echo '<td>'.$numrow.'</td>';          // Номер строки (№ пп)
    echo '<td>';  // Авторы
    foreach ($uchpos->authors->author as $author)
    {
        echo '<p>';
        echo $author;
        echo '</p>';
    }
    echo '</td>';
    echo '<td>'.$uchpos->name.'</td>';    // Наименование учебного пособия
    echo '<td>'.$uchpos['year'].'</td>';  // Год издания
    echo '<td>';  // Дисциплины
    foreach ($uchpos->disciplines->discipline as $discipline)
    {
        echo '<p>';
        echo $discipline;
        echo '</p>';
    }
    echo '</td>';
    echo '<td>';
    echo '<a href="'.$pathtofiles.$uchpos->pdffilename.'">Открыть</a>';
    echo '</td></tr>';
    $numrow++;
}

echo '</tbody></table>';

echo '</div>';// end of class="container-fluid"

include("../includes/footer.php");