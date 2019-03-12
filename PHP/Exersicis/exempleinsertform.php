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

        $nom = $_REQUEST['nom'];
        $llinatges = $_REQUEST['llinatges'];
        $edat = $_REQUEST['edat'];

        $sql="INSERT INTO treballadors (nom, llinatges, edat) values ('$nom', '$llinatges', '$edat')";

        if (mysqli_query($con,$sql)) {
                echo "Table treballadors created successfully";
            } else {
                echo "Error creating table: " . mysqli_error($con);
            }

        

        mysqli_close($con);
    ?>
</body>
</html>