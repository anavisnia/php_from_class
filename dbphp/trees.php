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


echo "<h1>Visi default</h1>";
// prisujungimas prie DB
$sql = "SELECT name, height, id, type FROM trees";
// siunciame uzklausa i DB
$stmt = $pdo->query($sql);
// gauname atsakyma is DB
while($row = $stmt->fetch()) {
    echo $row['id'] . ': ' . $row['name'] . ' ' . $row['height'] . ' ' . $row['type'] . '<br>';
}

// sql inner join

echo "<h1>SQL Inner Join</h1>";
echo "<h1>Medziu tipai</h1>";
$sql = "SELECT trees.id as tid, name, height, type, typetitle
FROM trees
INNER JOIN treetype
on treetype.id = trees.type;";
$stmt = $pdo->query($sql);
while($row = $stmt->fetch()) {
    echo $row['tid'] . ': ' . $row['name'] . ' ' . $row['height'] . ' - ' . $row['typetitle'] . '<br>';
}