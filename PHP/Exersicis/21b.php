<?php
// Create connection
$con=mysqli_connect("localhost","root","","base1");
// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " .
        mysqli_connect_error();
}
else {
    echo "<p>OK: Connected to the Database.</p>";
}
    mysqli_query($con,"UPDATE cursos SET nombrecurso=concat(nombrecurso,'2014') WHERE codigo=".$_REQUEST['cursos']);
    echo "curse name changed";
    
    mysqli_close($con);
?>