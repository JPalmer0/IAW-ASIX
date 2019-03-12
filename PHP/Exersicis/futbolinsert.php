<html>
<head>
    <title>Connect to DB (PHP)</title>
</head>
<body>
    <?php
        // Create connection
        $con=mysqli_connect("localhost","root","","futbol");

        // Operate over database

        // farem coses


        // Create table

        $sql=mysqli_query($con,"INSERT INTO equip (id,
        nom, posicio, punts)
        VALUES (3, 'Manacor', 'Tercer' ,89 )");

    if (mysqli_query($con,$sql)) {
                echo "Insert worked succefully";
            } else {
                echo "Error creating table: " . mysqli_error($con);
            }
        

        

        mysqli_close($con);
    ?>
</body>
</html>