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





/*проходим циклом по xml документу*/
foreach ($xml1->uchpos as $uchpos)
{
    if($uchpos['podpvpechat']==$podpvpechat and $uchpos['nomerzakaza']==$nomerzakaza)
    {
        echo '<div class="container">';
        
        // Название
        echo '<h1>';  
        echo '<a href="'.$pathtofiles.$uchpos->pdffilename.'">'.$uchpos->name.'</a>';
        echo '</h1>';
        
        /*
        // Факультеты
        echo '<h4>Факультеты:</h4>';
        echo '<ul>';
        foreach ($uchpos->faculties->facultet as $facultet)
        {
            echo '<li>'.$facultet.'</li>';
        }
        echo '</ul>';
        
        // Кафедры
        echo '<h4>Кафедры:</h4>';
        echo '<ul>';
        foreach ($uchpos->kafs->kaf as $kafedra)
        {
            echo '<li>'.$kafedra.'</li>';
        }
        echo '</ul>';
        */
        
        
        echo '<div class=row>';
            echo '  <div class="col-md-4">';
            // Картинка
            echo '  <img src='./*$pathtofiles.*/$uchpos->coverfilename.' class="img-responsive img-thumbnail">';
            echo '  </div>';// end of class="col-md-4"
            echo '  <div class="col-md-8">';
                // Авторы
                echo '<h3>Авторы: ';
                foreach ($uchpos->authors->author as $author)
                {
                    echo $author;
                    echo ' ';
                }
                echo '</h3>';
                echo '<h4>Год издания: '.$uchpos['year'].'</h4>';
                echo '<h4>Количество страниц: '.$uchpos['numstr'].'</h4>';
                echo '<h4>Количество печатных листов: '.$uchpos['numpl'].'</h4>';
        
                echo '<h3>Дисциплины:</h3>';
                echo '<ul>';
                foreach ($uchpos->disciplines->discipline as $discipline)
                {
                    echo '<li>'.$discipline.'</li>';
                }
                echo '</ul>';

                echo '<h3>Направления подготовки:</h3>';
                echo '<ul>';
                foreach($uchpos->napravleniya->napravlenie as $napr)
                    {
                        echo '<li>';
                        echo $napr;
                        echo '</li>';            
                    }
                echo '</ul>';
            echo '  </div>';// end of class="col-md-8" 
        echo '</div>';// end of class="row"
        
        
        
        
        
        
        
        
        // Аннотация
        echo '<h1>Аннотация</h1>';  
        foreach ($uchpos->annotations->annotation as $annotation)
        {
            echo '<p>'.$annotation.'</p>';            
        }


        // Оглавление
        echo '<h1>Оглавление</h1>';
        foreach ($uchpos->contents->content as $content)
        {
            echo '<div class=row>';
            echo '  <div class="col-md-10">';
            echo '  <p>'.$content.'</p>';
            echo '  </div>';// end of class="col-md-10"
            echo '  <div class="col-md-2">';
            echo '  <p>'.$content['pagenumber'].'</p>';
            echo '  </div>';// end of class="col-md-2" 
            echo '</div>';// end of class="row"
        }

        
        echo '<h1>Библиографическое описание</h1>';         
        echo '<p>'.$uchpos->biblopisanie.'</p>';

        echo '</div>';// end of class="container-fluid"
    }
}



include("../includes/footer.php");