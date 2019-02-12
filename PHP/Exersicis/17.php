<html>
<head>
    <title>Connect to DB (PHP)</title>
</head>
<body>
    <?php
        // Create connection
        $con=mysqli_connect("localhost","root","","shop");

        
        $sql1="CREATE TABLE ARTICLE 
        (CODE INT PRIMARY KEY AUTO_INCREMENT,
        NAME VARCHAR,
        DESCRIPTION VARCHAR,
        PRICE DOUBLE,
        CATEGORYCODE INT,
        BARGAIN BOOLEAN)";

        $sql2="CREATE TABLE CATEGORY 
        (CODE INT PRIMARY KEY AUTO_INCREMENT,
        NAME VARCHAR)";


        mysqli_query($con, $sql, $sql2);
        mysqli_close($con);

        if (mysqli_query($con,$sql1,$sql2)) {
        echo "Table created successfully";
            }
        else {
      "Error creating DB: ".mysqli_error($con);
            }  
    ?>
</body>
</html>