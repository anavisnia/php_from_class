<?php
require __DIR__.'/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL?>app.css">
    <title>Hello</title>
</head>
<body>
    <h1>Hello page</h1>
    <a href="<?= URL ?>login.php">Login</a>
    <a href="<?= URL ?>private.php">Private</a>

</body>
</html>
