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

//                                        SKAITIMAS IS DB
echo '<h1>Viskas</h1>';
// uzklausa
$sql = "SELECT name, height, id FROM trees";
// perdavimas uzklausos i db, gaunu statment (object pavidalu)
$stmt = $pdo->query($sql);
// objektas yra iteruojamas masyvo pavydalu
while ($row = $stmt->fetch())
{
    echo $row['id'] .': ' . $row['name'] . ' ' . $row['height'] . '<br>';
}

echo '<br>' . '<h1>Lapuociai</h1>';
// paimti specifini info
$sql = 
"SELECT name, height, id 
FROM trees
WHERE type = 2"; // <---- sql formavimas
// salygos

$sql = 
"SELECT name, height, id 
FROM trees
WHERE type = 2 AND height > 10"; // <---- sql formavimas

$stmt = $pdo->query($sql);

while ($row = $stmt->fetch())
{
    echo $row['id'] .': ' . $row['name'] . ' ' . $row['height'] . '<br>';
}

echo '<br>' . '<h1>Viskas pagal auskti</h1>';

$sql = 
"SELECT name, height, id 
FROM trees
ORDER BY height DESC"; // <---- sql formavimas

$stmt = $pdo->query($sql);

while ($row = $stmt->fetch())
{
    echo $row['id'] .': ' . $row['name'] . ' ' . $row['height'] . '<br>';
}

echo '<br>' . '<h1>Lapuociai pagal auskti</h1>';

$sql = 
"SELECT name, height, id 
FROM trees
WHERE type = 2
ORDER BY height DESC"; // <---- sql formavimas

$stmt = $pdo->query($sql);

while ($row = $stmt->fetch())
{
    echo $row['id'] .': ' . $row['name'] . ' ' . $row['height'] . '<br>';
}

//                                        IRASYMAS I BD

$sql = "INSERT INTO trees (name, height, type)
VALUES ('Kastonas', 7.99, 2)"; // <--- suformuojam 
// $pdo->query($sql); // <--- perduodam i db