<?php 
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $color = '35B626';
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = 'FFFC00';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nr6</title>
</head>
<body style="background:#<?=$color?>;">
    <!-- GET -->
    <form action="" method="GET">
        <button type="submit">GET</button>
    </form>
    <!-- POST -->
    <form action="" method="POST">
        <button type="submit">POST</button>
    </form>
</body>
</html>