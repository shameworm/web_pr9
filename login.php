<?php
    session_start (); 
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>login</title>
</head>
<body>
    <?php
    if (empty($_SESSION['login'])){
      echo "<form method='POST' name='authorization' action='auth.php'>
         Логин:&nbsp&nbsp <input type='text' name='username'><br>
         Пароль: <input type='password' name='user_password'><br>
         <input type='submit' value='Войти'>
     </form>";
    }
    else {
      $_SESSION ['Login']=$_GET ['login'];
      $_SESSION ['Passwd']=$_GET ['passwd'];
    }
   ?>
</body>
</html>>