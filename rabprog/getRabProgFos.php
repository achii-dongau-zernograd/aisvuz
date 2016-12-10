<?php

/* 
 * Электронная информационно-образовательная среда
 * Азово-Черноморского инженерного института ФГБОУ ВО Донской ГАУ.
 * Модуль вывода рабочих программ и фондов оценочных средств
 */

/*подключаем xml файл*/
$xml1= simplexml_load_file($_GET['xmlfile']);
/*функция перекодировки*/
/*function utf_win($str, $type)
{
    static $co = '';
    if (!is_array($co))
    {
        $co = array();
        for ($x=128; $x <= 143; $x++)
        {
            $co['utf'][] = chr(209) . chr($x);
            $co['win'][] = chr($x + 112);
        }
        for ($x=144; $x<= 191; $x++)
        {
            $co['utf'][] = chr(208) . chr($x);
            $co['win'][] = chr($x + 48);
        }
        $co['utf'][] = chr(208) . chr(129);
        $co['win'][] = chr(168);
        $co['utf'][] = chr(209) . chr(145);
        $co['win'][] = chr(184);
    }
    if ($type == 'w')
    {
        return str_replace($co['utf'], $co['win'], $str);
    }
    elseif ($type == 'u')
    {
        return str_replace($co['win'], $co['utf'], $str);
    }
    else
    {
        return $str;
    }
}*/

// Присваиваем параметры переменным
//$napravlenie=$_GET['napravlenie'];// Направление подготовки
//$profil=$_GET['profil'];// Направление подготовки

// Определяем направление подготовки
switch($_GET['napravlenie'])
{
    case "350306":
        $napravlenie="35.03.06 \"Агроинженерия\"";break;
}

// Определяем профиль подготовки
switch($_GET['profil'])
{
    case ab:
        $profil="Технические системы в агробизнесе";break;
    case ae:
        $profil="Электрооборудование и электротехнологии";break;
    case at:
        $profil="Технический сервис в АПК";break;
}

// Определяем программу подготовки
switch($_GET['programma'])
{
    case akb:
        $programma="Академический бакалавриат";break;
    case prb:
        $programma="Прикладной бакалавриат";break;
    case akm:
        $programma="Академическая магистратура";break;
    case prm:
        $programma="Прикладная магистратура";break;
    default:
        $programma="-";
}

// Определяем форму обучения
switch($_GET['formaobucheniya'])
{
    case o:
        $formaobucheniya="Очная";break;
    case ou:
        $formaobucheniya="Очная (ускоренное обучение на базе СПО)";break;
    case zo:
        $formaobucheniya="Заочная";break;
    case zou:
        $formaobucheniya="Заочная (ускоренное обучение на базе СПО)";break;
    case oz:
        $formaobucheniya="Очно-заочная";break;
    default:
        $programma="-";
}

$godnachalapodgotovki=$_GET['godnachalapodgotovki'];

// Формируем заголовок и шапку таблицы
echo '<table border="1"><caption>'
. "Направление подготовки: ".$napravlenie."<br>"
. "Профиль (направленность, специализация): ".$profil."<br>"
. "Программа подготовки: ".$programma."<br>"
. "Форма обучения: ".$formaobucheniya."<br>"
. "Год начала подготовки: ".$godnachalapodgotovki."<br>"
. '</caption>';
echo '<tr><th>№ пп</th><th>Код</th><th>Наименование</th><th>Рабочая программа</th><th>Фонд оценочных средств</th></tr>';
echo '<tr><td colspan=5><p align=center><b>Учебные дисциплины</b></p></td></tr>';

$numrow=1;
/*проходим циклом по xml документу*/
foreach ($xml1->discipline as $discipline)
{
    //echo'ID:'.$sort->id.' Имя:'.utf_win($sort->name, "w").'<BR>';
    //echo 'ID:'.$sort->id.' Имя:'.$sort->name.'<BR>';
    echo '<tr>'
    . '<td>'.$numrow.'</td>'             // Номер строки (№ пп)
    . '<td>'.$discipline->id.'</td>'           // Код дисциплины, практики и пр.
    . '<td>'.$discipline->name.'</td>'         // Наименование дисциплины, практики и пр.
    . '<td><a href="'.$discipline->rpfilename.'">Открыть</a></td>'  // Ссылка на файл рабочей программы
    . '<td><a href="'.$discipline->fosfilename.'">Открыть</a></td></tr>';                  // Ссылка на файл фонда оценочных средств
    $numrow++;
}

echo '<tr><td colspan=5><p align=center><b>Практики</b></p></td></tr>';
$numrow=1;
foreach ($xml1->pract as $pract)
{
    //echo'ID:'.$sort->id.' Имя:'.utf_win($sort->name, "w").'<BR>';
    //echo 'ID:'.$sort->id.' Имя:'.$sort->name.'<BR>';
    echo '<tr>'
    . '<td>'.$numrow.'</td>'             // Номер строки (№ пп)
    . '<td>'.$pract->id.'</td>'           // Код дисциплины, практики и пр.
    . '<td>'.$pract->name.'</td>'         // Наименование дисциплины, практики и пр.
    . '<td><a href="">Открыть</a></td>'  // Ссылка на файл рабочей программы
    . '<td></td></tr>';                  // Ссылка на файл фонда оценочных средств
    $numrow++;
}

echo '<tr><td colspan=5><p align=center><b>Государственная итоговая аттестация</b></p></td></tr>';
$numrow=1;
foreach ($xml1->gia as $gia)
{
    //echo'ID:'.$sort->id.' Имя:'.utf_win($sort->name, "w").'<BR>';
    //echo 'ID:'.$sort->id.' Имя:'.$sort->name.'<BR>';
    echo '<tr>'
    . '<td>'.$numrow.'</td>'             // Номер строки (№ пп)
    . '<td>'.$gia->id.'</td>'           // Код дисциплины, практики и пр.
    . '<td>'.$gia->name.'</td>'         // Наименование дисциплины, практики и пр.
    . '<td><a href="">Открыть</a></td>'  // Ссылка на файл рабочей программы
    . '<td></td></tr>';                  // Ссылка на файл фонда оценочных средств
    $numrow++;
}

echo '</table>';

