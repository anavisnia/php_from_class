<?php
if(isset($_GET['color'])) {
    header('Location:http://localhost/bit/zuikis/web/web5/blue.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red</title>
</head>
<body style="background:red;">
<a href="http://localhost/bit/zuikis/web/web5/red.php?color=1">Go to blue</a>
    
</body>
</html>