<?php 
if(isset($_GET['color'])) {
    //        pagal  key
    $color = $_GET['color']; // gaunam value
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nr2</title>
</head>
<body style="background:#<?= $color ?? '000'?>;">
<a href="http://localhost/bit/zuikis/web/web2.php">Home</a>
</body>
</html>