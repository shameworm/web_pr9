<?php
  session_start ();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Authentication</title>
</head>
<body>
<?php
   if ($_SESSION ['Login']=="admin"and
   $_SESSION ['Passwd']==1111) {
   $_SESSION['auth'] = true;
   Header ("Location: restricted.php");
   } 
   else echo "Nope,try again<br>";
   ?>
</body>
</html>>