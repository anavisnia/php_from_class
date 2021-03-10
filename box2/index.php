<?php
require __DIR__.'/bootstrap.php';


$uri = explode('/', str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']));

_pc($uri);

//ROUTING

if ('' == $uri[0]) {
    (new BananaConstructor)->index();
}
elseif('create' == $uri[0]) {
    (new BananaConstructor)->create();
}
elseif('store' == $uri[0]) {
    (new BananaConstructor)->store();
}
elseif('edit' == $uri[0]) {
    (new BananaConstructor)->edit((int) $uri[1]);
}


echo "DURYS";