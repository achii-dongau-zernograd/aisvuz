<?php //session_start(); ?>

<?php
if(isset($_SESSION["session_username"]))
{
    //echo '<li><a href="/profile"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$_SESSION["session_username"].'</a></li>';
?>
                    <!-- Выпадающий список -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $_SESSION["session_username"]; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Личный кабинет</a></li>                          
                          <li><a href="/authorization/logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Выйти</a></li>
                        </ul>
                    </li>
<?php
}
else
{
    echo '<li><a href="/authorization/login.php"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Войти</a></li>';
}
?>

<!-- Область авторизации горизонтального меню -->        


