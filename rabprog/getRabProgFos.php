<?php

/* 
 * Электронная информационно-образовательная среда
 * Азово-Черноморского инженерного института ФГБОУ ВО Донской ГАУ.
 * Модуль вывода рабочих программ и фондов оценочных средств
 */

require_once("../includes/constants.php");
include("../includes/header.php");
echo '<br><br><br>';

/*подключаем xml файл*/
$xml1= simplexml_load_file($_GET['xmlfile']);

foreach ($xml1->common as $common)
{    
    $uroven                 = $common->uroven;
    $napravlenie            = $common->napravlenie;
    $profil                 = $common->profil;
    $programma              = $common->programma;
    $formaobucheniya        = $common->formaobucheniya;
    $godnachalapodgotovki   = $common->godnachalapodgotovki;
}


// Формируем заголовок и шапку таблицы
echo '<div class="container-fluid">';
echo '<table class="table table-bordered table-hover table-condensed"><caption>'
. "Уровень образования: ".$uroven."<br>"
. "Направление подготовки: ".$napravlenie."<br>"
. "Профиль (направленность, специализация): ".$profil."<br>"
. "Программа подготовки: ".$programma."<br>"
. "Форма обучения: ".$formaobucheniya."<br>"
. "Год начала подготовки: ".$godnachalapodgotovki."<br>"
. '</caption>';
echo '<thead><tr><th>№ пп</th><th>Код</th><th>Наименование</th><th>Рабочая программа</th><th>Фонд оценочных средств</th></tr></thead><tbody>';
echo '<tr class="active"><td colspan=5><p class="text-center"><b>Учебные дисциплины</b></p></td></tr>';

$numrow=1;
$pathtofiles=PATH_FILESERVER.basename($_GET['xmlfile'],".xml").'/';
/*проходим циклом по xml документу*/
foreach ($xml1->discipline as $discipline)
{
    //echo'ID:'.$sort->id.' Имя:'.utf_win($sort->name, "w").'<BR>';
    //echo 'ID:'.$sort->id.' Имя:'.$sort->name.'<BR>';
    echo '<tr>'
    . '<td>'.$numrow.'</td>'             // Номер строки (№ пп)
    . '<td>'.$discipline->id.'</td>'           // Код дисциплины, практики и пр.
    . '<td>'.$discipline->name.'</td>'         // Наименование дисциплины, практики и пр.
    . '<td><a href="'.$pathtofiles.$discipline->rpfilename.'">Открыть</a></td>'  // Ссылка на файл рабочей программы
    . '<td><a href="'.$pathtofiles.$discipline->fosfilename.'">Открыть</a></td></tr>';                  // Ссылка на файл фонда оценочных средств
    $numrow++;
}

echo '<tr class="active"><td colspan=5><p class="text-center"><b>Практики, НИР</b></p></td></tr>';
$numrow=1;
foreach ($xml1->pract as $pract)
{
    //echo'ID:'.$sort->id.' Имя:'.utf_win($sort->name, "w").'<BR>';
    //echo 'ID:'.$sort->id.' Имя:'.$sort->name.'<BR>';
    echo '<tr>'
    . '<td>'.$numrow.'</td>'             // Номер строки (№ пп)
    . '<td>'.$pract->id.'</td>'           // Код дисциплины, практики и пр.
    . '<td>'.$pract->name.'</td>'         // Наименование дисциплины, практики и пр.
    . '<td><a href="'.$pathtofiles.$pract->rpfilename.'">Открыть</a></td>'  // Ссылка на файл рабочей программы
    . '<td><a href="'.$pathtofiles.$pract->fosfilename.'">Открыть</a></td></tr>';                  // Ссылка на файл фонда оценочных средств
    $numrow++;
}

echo '<tr class="active"><td colspan=5><p class="text-center"><b>Государственная итоговая аттестация</b></p></td></tr>';
$numrow=1;
foreach ($xml1->gia as $gia)
{
    //echo'ID:'.$sort->id.' Имя:'.utf_win($sort->name, "w").'<BR>';
    //echo 'ID:'.$sort->id.' Имя:'.$sort->name.'<BR>';
    echo '<tr>'
    . '<td>'.$numrow.'</td>'             // Номер строки (№ пп)
    . '<td>'.$gia->id.'</td>'           // Код дисциплины, практики и пр.
    . '<td>'.$gia->name.'</td>'         // Наименование дисциплины, практики и пр.
    . '<td><a href="'.$pathtofiles.$gia->rpfilename.'">Открыть</a></td>'  // Ссылка на файл рабочей программы
    . '<td><a href="'.$pathtofiles.$gia->fosfilename.'">Открыть</a></td></tr>';                  // Ссылка на файл фонда оценочных средств
    $numrow++;
}

echo '</tbody></table>';

echo '</div>';// end of class="container-fluid"

//include("../includes/footer.php");