<?php 
session_start();
if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $postLength = count($_POST);
    // $_SESSION['rezult'] = $postLength;
} else {
    echo '<h1>' . 'Nieko nepazymejote...' . '</h1>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezultatas</title>
</head>
<body>
<?php 
// if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
//     echo '<h1>' . 'Jus pazymejote: ' . ($_SESSION['rezult']) . ' is ' . ($_SESSION['randNum']) . '.' . '</h1>';
// }
?>
</body>
</html>

<?php 
// unset($_SESSION['rezult']);
// unset($_SESSION['randNum']);
// session_destroy();
?>