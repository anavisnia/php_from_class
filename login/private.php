<?php
require __DIR__.'/bootstrap.php';
_pc($_SESSION);
if(!isset($_SESSION['login']) || 1 != $_SESSION['login']) {
    header('Location: '.URL.'login.php'); // kreipiam i  logino puslapi
    die;
}
?>

<?php
require __DIR__.'/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private</title>
</head>
<body>
    <h1>Hello <?= $_SESSION['user']['name'] ?></h1>
    <a href="<?= URL ?>login.php?logout">Logout</a>
    
</body>
</html>