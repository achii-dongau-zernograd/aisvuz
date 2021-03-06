<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title> Корпоративная информационная система АЧИИ Донской ГАУ</title>
    
    <!-- Bootstrap. Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Bootstrap. Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link href="css/style.css" media="screen" rel="stylesheet">
      
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Заголовок -->
            <div class="navbar-header">
                <!-- Кнопка «Гамбургер» отображается только в мобильном виде (предназначена для открытия основного содержимого Navbar) -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- Бренд или название сайта (отображается в левой части меню) -->
                <a class="navbar-brand" href="http://ачгаа.рф">АЧГАА.РФ</a>                
            </div>
            <!-- Основная часть меню (может содержать ссылки, формы и другие элементы) -->
            <div class="collapse navbar-collapse" id="navbar-main">
                <!-- Содержимое основной части -->

                <ul class="nav navbar-nav">
                    
                    <!-- Выпадающий список -->
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Сведения об образовательной организации<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/sveden/common">Основные сведения</a></li>
                        <li><a href="/sveden/struct">Структура и органы управления образовательной организацией</a></li>
                        <li><a href="/sveden/document">Документы</a></li>
                        <li><a href="/sveden/education">Образование</a></li>
                        <li><a href="/sveden/eduStandarts">Образовательные стандарты</a></li>
                        <li><a href="/sveden/employees">Руководство. Педагогический (научно-педагогический) состав</a></li>
                        <li><a href="/sveden/objects">Материально-техническое обеспечение и оснащённость образовательного процесса</a></li>
                        <li><a href="/sveden/grants">Стипендии и иные виды материальной поддержки</a></li>
                        <li><a href="/sveden/paid_edu">Платные образовательные услуги</a></li>
                        <li><a href="/sveden/budget">Финансово-хозяйственная деятельность</a></li>
                        <li><a href="/sveden/vacant">Вакантные места для приема (перевода)</a></li>
                        <!-- <li role="separator" class="divider"></li>
                        <li><a href="#">Ссылка</a></li> -->
                      </ul>
                    </li>
                                        
                    <!-- <li class="active"><a href="#">Ссылка 1</a></li>
                    <li><a href="#">Ссылка 2</a></li>
                    <li><a href="#">Ссылка 3</a></li> -->
                    <li><a href="/metod/ShowListNaprWithUchPos.php">Учебные пособия</a></li>
                    <li><a href="/rabprog/">Рабочие программы и ФОС</a></li>                    
                </ul>
      
                <!-- Блок, расположенный справа -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Область авторизации -->        
                    <?php include('authMenuItems.php'); ?>                    
                </ul>
            </div>
        </div>
    </nav>