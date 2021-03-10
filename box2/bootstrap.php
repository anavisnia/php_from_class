<?php
session_start();

define('URL', 'http://localhost/bit/zuikis/box2/'); // konstanta string pavidalu
define('INSTALL_DIR', '/bit/zuikis/box2/');
define('DIR', __DIR__.'/'); // savo parasyta konstanta, kuri visada rodys kur muks reikia
// require DIR.'app/functions.php';

require DIR.'app/BananaConstructor.php';
require DIR.'app/Json.php';
require DIR.'app/Box.php';

_pc($_SESSION, 'SESIJA--->');