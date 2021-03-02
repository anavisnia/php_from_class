<?php 
// session_start();
// unset($_SESSION['randNum']);
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nr9</title>
</head>
<body style='background:black; color:white;'>
<form action="./rezult.php" method="post">
    <?php
    $randNum = rand(3, 10);
    $letetrs = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
    for($i = 0; $i< $randNum; $i++) {
        echo '<input type="checkbox" name="check' . $letetrs[$i] . '">' . $letetrs[$i];
    }
    // $_SESSION['randNum'] = $randNum;
    ?>
    <button type="submit">Select</button>
</form>
    
</body>
</html>