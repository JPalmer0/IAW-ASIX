<html>
<head>
    <title>Connect to DB (PHP)</title>
</head>
<body>
    <?php
        // Create connection
        $con=mysqli_connect("localhost","root","","asix2018");
        // Check connections
        if (mysqli_connect_errno($con)) {
            echo "Failed to connect to MySQL: ".mysqli_connect_error();
        }
        else {
            echo "<p>OK: Connected to database.</p>";
        }
        // Operate over database
        mysqli_close($con);
    ?>
</body>
</html>