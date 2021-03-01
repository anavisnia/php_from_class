<?php 
if(isset($_GET['color'])) {
    $color = 'red';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nr1</title>
</head>
<body style="background:<?= $color ?? 'black'?>;">
<a style="text-decoration:none;color:white;" href="http://localhost/bit/zuikis/web/web1.php">Black</a>
<a style="text-decoration:none;color:#660000;" href="http://localhost/bit/zuikis/web/web1.php?color=1">Red</a>
</body>
</html>