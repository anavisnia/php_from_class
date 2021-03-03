<?php
require __DIR__.'/bootstrap.php';
//POST scenarijus
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bananas = $POST['count'] ?? 0;
    $bananas = (int) $bananas;
    create($bananas); // funkcija kuri sukuria banana
    header('Location: '.URL);
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Banana Box</title>
</head>
<body>
    <h1>Create Box</h1>
    <a href="<?= URL ?>create.php">Create</a>
    <form action="<?= URL ?>create.php" method="post">
        Bananas in box: <input type="text" name="count">
        <button type="submit">Create</button>
    </form>
    
</body>
</html>