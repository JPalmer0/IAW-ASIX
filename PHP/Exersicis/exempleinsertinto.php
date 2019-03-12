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

        mysqli_query($con,"INSERT INTO treballadors (nom,
        llinatges, edad)
        VALUES ('Peter', 'Griffin',35)");


        if (mysqli_query($con,$sql)) {
                echo "Insert worked succefully";
            } else {
                echo "Error creating table: " . mysqli_error($con);
            }

        

        mysqli_close($con);
    ?>
</body>
</html>