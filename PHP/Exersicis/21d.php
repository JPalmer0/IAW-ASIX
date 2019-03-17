<?php
// Create connection
$con=mysqli_connect("localhost","root","","shop");
// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " .
        mysqli_connect_error();
}
else {
    echo "<p>OK: Connected to the Database.</p>";
}
    $sql= "UPDATE `article` SET `price`=`price`/2 WHERE bargain=1";
    mysqli_query($con,$sql);
    echo "price changed to 50%";
    
    mysqli_close($con);
?>