<?php
$trace="Отладочная информация\n\r";

if ($_POST['PASSWORD']=='MyTestPassword')
{
    $uploaddir = 'data/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    $trace=$trace."Авторизация выполнена успешно.\n\r";
    $trace=$trace."Загрузка файла ".basename($_FILES['userfile']['name'])." в папку ".$uploaddir."\n\r" ;

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
    {
        $trace=$trace."Файл корректен и был успешно загружен.\n\r";
    }
    else
    {
        $trace=$trace."Возможная атака с помощью файловой загрузки!\n\r";
    }
}
else
{    
    $trace=$trace."---Пароль не верный!---\n\r";
}

echo $trace;
print_r($_POST);
print_r($_FILES);
echo "\n--Вывод заголовков http-запроса--\n";
foreach (getallheaders() as $name => $value)
{
    echo "$name: $value\n";
}
?>

