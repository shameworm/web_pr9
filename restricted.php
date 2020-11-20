<?php 
   session_start (); 
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Info</title>
</head>
<body>
<?php
    if (isset($_GET ['auth'])) {
        echo "<a href='login.php'>Авторизироваться</a>";
    }
else{
    echo "Welcome a board";
}
?>
</body>
</html>>