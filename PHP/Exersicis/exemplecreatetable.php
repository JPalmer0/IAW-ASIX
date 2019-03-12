<html>
<head>
    <title>Connect to DB (PHP)</title>
</head>
<body>
    <?php
        // Create connection
        $con=mysqli_connect("localhost","root","","asix2018");

        // Operate over database

        // farem coses


        // Create table

        $tableName = "treballadors";
        $sql="CREATE TABLE treballadors (nom CHAR(30),llinatges
        CHAR(30), edat INT)";

        if (mysqli_query($con,$sql)) {
                echo "Table persons created successfully";
            } else {
                echo "Error creating table: " . mysqli_error($con);
            }

        

        mysqli_close($con);
    ?>
</body>
</html>