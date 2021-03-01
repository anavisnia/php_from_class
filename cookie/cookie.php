<?php
// urlencode ( string $string ) : string
_pc(rawurlencode('saldus selauges skonio'));


// setcookie ( string $name , string $value = "" , int $expires = 0 , string $path = "" , string $domain = "" , bool $secure = false , bool $httponly = false ) : bool
setcookie('Mano-pirmasis-kukis', 'saldus selauges skonio', time() - 60);
setcookie('Mano-antras-kukis', 'saldus apelsinu skonio', time() + 8000, '/');

_pc($_COOKIE);