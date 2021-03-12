<?php
session_start();
define('URL', 'http://localhost/bit/zuikis/box3/'); // <--- konstanta
define('DIR', __DIR__.'/');

define('INSTALL_DIR', '/bit/zuikis/box3/');


require DIR. 'app/BananaController.php';
require DIR. 'app/Json.php';
require DIR. 'app/Box.php';


// _d($_SESSION, 'SESIJA--->');

// http://localhost/bit/zuikis/box/



