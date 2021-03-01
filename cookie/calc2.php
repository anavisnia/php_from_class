<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $x = (float) ($_POST['x'] ?? 0);
    $y = (float) ($_POST['y'] ?? 0);

    $suma = $x + $y;

    $_SESSION['Rezultatas'] = $suma;

    header('Location: http://localhost/bit/zuikis/calc2.php');
    die;
}

if(isset($_SESSION['Rezultatas'])) {
    $rez = $_SESSION['Rezultatas'];
    unset($_SESSION['Rezultatas']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma</title>
</head>
<body>
<h1>Sumatorius v2</h1>
<h3>Rezultatas: <?= $rez ?? '---'?></h3>

<form action="http://localhost/bit/zuikis/calc2.php" method="POST">
<input type="text" name="x">
<input type="text" name="y">
<button type="submit">Skaiciok</button>
</form>
    
</body>
</html>