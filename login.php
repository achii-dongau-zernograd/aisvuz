<?php session_start(); ?>
<?php require_once("includes/connection.php"); ?>
<?php
	if(isset($_SESSION["session_username"]))
        {
            // вывод "Session is set"; // в целях проверки
            header("Location: intropage.php");
	}

	if(isset($_POST["login"]))
        {
            if(!empty($_POST['username']) && !empty($_POST['password']))
            {
                $username=htmlspecialchars($_POST['username']);
                $password=htmlspecialchars($_POST['password']);
                $query = mysqli_query($con,"SELECT * FROM usertbl WHERE username='".$username."' AND password='".$password."'");
                $numrows=mysqli_num_rows($query);
                if($numrows!=0)
                {
                    while($row=mysqli_fetch_assoc($query))
                    {
                         $dbusername=$row['username'];
                         $dbpassword=$row['password'];
                    }
                    if($username == $dbusername && $password == $dbpassword)
                    {
                        // старое место расположения
                        //  session_start();
                        $_SESSION['session_username']=$username;	 
                        /* Перенаправление браузера */
                        header("Location: intropage.php");
                    }
                }
                else
                {
                    //$message = "Invalid username or password!";	
                    $message = "Неверное имя пользователя или пароль!";
                    echo "<script>alert('$message');</script>";
                }
            }
            else
            {
                $message = "Необходимо заполнить все поля!";
                echo "<script>alert('$message');</script>";
            }
	}
        
        
?>
<?php include("includes/header.php"); ?>
    <div class="jumbotron">
      <div class="container mlogin">       
        <div id="login" class="text-center">                  
            <h1>Вход в систему</h1>
            <form action="" id="loginform" method="post" name="loginform">
                <p><label for="user_login">Имя пользователя<br>
                <input class="form-control" id="username" name="username" size="20" type="text" value=""></label></p>
                <p><label for="user_pass">Пароль<br>
                 <input class="form-control" id="password" name="password" size="20" type="password" value=""></label></p> 
                    <p class="submit"><input class="btn btn-default"  name="login" type= "submit" value="Войти"></p>
                    <p class="regtext">Еще не зарегистрированы?   <a href= "register.php">Регистрация!</a></p>                    
            </form>
         </div>
      </div>
    </div>    
<?php include("includes/footer.php"); ?>