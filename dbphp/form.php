<?php

$host = '127.0.0.1';
$db   = 'forest';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if(!empty($_POST)) {
    if('add' == $_POST['action']) {
        // $sql = "INSERT INTO trees (name, height, type)
        // VALUES ('".$_POST['name']."', ".$_POST['height'].", ".$_POST['type'].")";
        // $pdo->query($sql);

        // $sql = "INSERT INTO trees (name, height, type)
        // VALUES (?, ?, ?)";
        // $stmt = $pdo->prepare($sql); // parosimas
        // $stmt->execute([$_POST['name'], $_POST['height'], $_POST['type']]); // vykdimas

        $sql = "INSERT INTO trees (name, height, type)
        VALUES (:name, :h, :type)";
        $stmt = $pdo->prepare($sql); // parosimas
        $stmt->execute(['name' => $_POST['name'],'h' => $_POST['height'], 'type' => $_POST['type']]); // vykdimas
    }

    if('delete' == $_POST['action']) {
        $sql = "DELETE FROM trees where id=?"; // sql formavimas
        $stmt = $pdo->prepare($sql); // parosimas
        $stmt->execute([$_POST['id']]); // vykdimas

        // $sql = "DELETE FROM trees WHERE id=".$_POST['id']."";
        // $pdo->query($sql);
    }
    header('Location: http://localhost/bit/zuikis/dbphp/form.php');
    die;
}


?>
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="height">Height</label>
        <input type="text" name="height">
        <label for="type">Type</label>
        <input type="text" name="type">
        <button type="submit" name="action" value="add">Plant</button>
    </form>
    <hr>
    <form action="" method="post">
        <label for="id">ID</label>
        <input type="text" name="id">
        <button type="submit" name="action" value="delete">Delete</button>
    </form>

<?php

echo '<h1>Viskas</h1>';
$sql = "SELECT name, height, id FROM trees";

$stmt = $pdo->query($sql);

while ($row = $stmt->fetch())
{
    echo $row['id'] .': ' . $row['name'] . ' ' . $row['height'] . '<br>';
}