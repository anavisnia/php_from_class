<?php 
if(isset($_GET['color']) && !empty($_GET['color'])) {
    $color = $_GET['color'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nr3</title>
</head>
<body style="background:#<?=$color ?? '9B2FF8'?>;">
<form action="" method="get">
    <input type="text" name="color">
    <button type="submit">Apply</button>
</form>
</body>
</html>