<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Location: http://localhost/bit/zuikis/web/web8/rose.php?re=no');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink</title>
</head>
<body style="background:#ffc0cb;">
    <form action="" method="POST">
        <button type="submit">GO TO ROSE</button>
    </form>
</body>
</html>