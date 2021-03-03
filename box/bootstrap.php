<?php
session_start();

define('URL', 'http://localhost/bit/zuikis/box/'); // konstanta string pavidalu
define('DIR', __DIR__.'/'); // savo parasyta konstanta, kuri visada rodys kur muks reikia
require DIR.'app/functions.php';

_pc($_SESSION, 'SESIJA--->');