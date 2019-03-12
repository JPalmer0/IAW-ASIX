<?php
//https://www.w3schools.com/Php/php_cookies.asp
$nom = $_REQUEST['nom'];
setcookie($nom,"nom", time() + 86400);
echo $nom;
?> 
<html> 
<head> <title></title> </head> 
<body> 
 
</body> 
</html>

