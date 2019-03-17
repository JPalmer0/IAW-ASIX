<?php
$con=mysqli_connect("localhost","root","","base1");
$correo=$_REQUEST["user"];
$sql="SELECT * from alumnos";
$rs=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($rs)) {
    if ($row['mail']==$correo){
        $guard=$row['nombre'];
        session_start();
        $_SESSION['user']=$guard;
        echo "Created session";
        echo "<br>";
    }
}
mysqli_close($con);
?>
<html>
<head> <title>Sesion</title> </head>
<body>
<a href="31asession.php">Ir a la siguiente pagina</a>
</body>
</html>
