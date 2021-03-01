<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $x = (float) ($_POST['x'] ?? 0);
    $y = (float) ($_POST['y'] ?? 0);

    $suma = $x + $y;

    setcookie('Rezultatas', $suma);

    header('Location: http://localhost/bit/zuikis/calc.php');
    die;
}

if(isset($_COOKIE['Rezultatas'])) {
    $rez = $_COOKIE['Rezultatas'];
    setcookie('Rezultatas', '', time() - 555);
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
<h1>Sumatorius v1</h1>
<h3>Rezultatas: <?= $rez ?? '---'?></h3>

<form action="http://localhost/bit/zuikis/calc.php" method="POST">
<input type="text" name="x">
<input type="text" name="y">
<button type="submit">Skaiciok</button>
</form>
    
</body>
</html>