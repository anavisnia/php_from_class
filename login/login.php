<?php
require __DIR__.'/bootstrap.php';

// LOGOUT scenarijus
// jeigu pasetintas indexas 'logout'
if (isset($_GET['logout'])) {
    //keli budai
    // $_SESSION['login'] = 0;
    // unset($_SESSION['user']);

    // kitas budas
    session_destroy();
    header('Location: '.URL.'login.php');
    die;
}

// Jau prisijungusiio vartotoja scenarius
if(isset($_SESSION['login']) && 1 == $_SESSION['login']) {
    header('Location: '.URL.'private.php');
    die;
}

// LOGIN scenarijus
// POST metodo scenarijus, jeigu paspautas ligin migtukas
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $users = file_get_contents(__DIR__.'/users.json'); // json'o stringas
    $users = json_decode($users, 1); // stringa paverciame i masyva

    //is POST gautos duomenis 
    $postName = $_POST['name'] ?? '';
    $postPass = $_POST['pass'] ?? '';

    foreach ($users as $user) {
        if ($postName == $user['name']) { // <--- turim useri
            if (password_verify($postPass, $user['pass'])) { // <--- viskas OK
                $_SESSION['login'] = 1;
                $_SESSION['user'] = $user;
                header('Location: '.URL.'private.php');
                die;
            }
        }
    }
    // jeigu tokio user'io/passwordo nerasta
    $_SESSION['error_msg'] = 'Password or Name is invalid.';
    header('Location: '.URL.'login.php'); // grazinam atgal logintis
    die;
}

// Defoult -> Prisijungimo formos rodymo scenarijus
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login page</h1>
    <!-- tikrinam ar yra pranesimas -->
    <?php if(isset($_SESSION['error_msg'])) : ?>
    <!-- pranesimas yra - atvaizduojame -->
        <h3 style="color:red;"><?= $_SESSION['error_msg'] ?></h3>
        <!-- atvaizdavome. Nebereikalingas, istrinam. Kad nerodytu sekanti karta -->
        <?php unset($_SESSION['error_msg']) ?>
    <?php endif ?>
    <form action="<?= URL ?>login.php" method="post">
        NAME: <input type="text" name="name">
        PASSWORD: <input type="password" name="pass">
        <button type="submit">Login</button>
    </form>
    
</body>
</html>