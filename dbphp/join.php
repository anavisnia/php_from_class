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

// SKAITIMAS
echo '<h1>INNER JOIN</h1>';
//100% susikirtimas tarp dveju lenteliu
// uzklausa
$sql = "SELECT *
FROM clients
INNER JOIN phones
ON clients.id = phones.client;";
//lentele.stulpelis

$stmt = $pdo->query($sql);

while ($row = $stmt->fetch())
{
    echo $row['id'] .': ' . $row['name'] . ' ' . $row['number'] . '<br>';
}

echo '<h1>LEFT JOIN</h1>';
//55% susikirtimas tarp dveju lenteliu
// uzklausa
$sql = "SELECT clients.id as cid, name, phones.id as pid, `number`
FROM clients
LEFT JOIN phones
ON clients.id = phones.client;";
//lentele.stulpelis

$stmt = $pdo->query($sql);

while ($row = $stmt->fetch())
{
    echo $row['cid'] .': ' . $row['name'] . ' ' . $row['number'] . '<br>';
}

echo '<h1>RIGHT JOIN</h1>';
//55% susikirtimas tarp dveju lenteliu
// uzklausa
$sql = "SELECT clients.id as cid, name, phones.id as pid, `number`
FROM clients
RIGHT JOIN phones
ON clients.id = phones.client;";
//lentele.stulpelis

$stmt = $pdo->query($sql);

while ($row = $stmt->fetch())
{
    echo $row['pid'] .': ' . $row['name'] . ' ' . $row['number'] . '<br>';
}