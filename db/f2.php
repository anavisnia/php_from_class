<?php 
// http://localhost/bit/zuikis/db/f2.php ----> kelias narsyklei
// C:\xampp\htdocs\bit\zuikis\db\f2.php ----> kelias serveriui (__DIR__)

$path = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
_pc($path);


echo 'Viso';
echo '<br>';
echo __DIR__; // nukreipti serveryje
echo '<br>';
require_once __DIR__ . '/f1.php';
require_once __DIR__ . '/f1.php';
?>