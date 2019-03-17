<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
if (checkdate($_REQUEST["month"], $_REQUEST["day"], $_REQUEST["year"])) {
    echo "Date is OK";
} else {
    echo "Wrong Date";
}
?>
</body>
</html>
