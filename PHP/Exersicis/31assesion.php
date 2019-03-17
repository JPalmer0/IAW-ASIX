<?php session_start(); ?>
<html>
<head> <title>Verificar</title> </head>
<body>
<?php
if (isset($_SESSION['user'])){
    echo "Welcome ".$_SESSION['user'];
}
else {
    echo "Can see the page";
}
?>
</body>
</html>