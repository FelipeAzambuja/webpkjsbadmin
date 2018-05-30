<?php
if ($_SERVER['SERVER_NAME'] === 'newbgp.com.br') {
    conf::$dateFormat = 'd/m/Y';
    conf::$servidor = 'mysql';
    conf::$endereco = 'localhost';
    conf::$usuario = 'root';
    conf::$senha = 'root';
    conf::$base = 'webpkjsbadmin';
    conf::$session = 'database';
} else {
    conf::$dateFormat = 'd/m/Y';
    conf::$servidor = 'mysql';
    conf::$endereco = 'localhost';
    conf::$usuario = 'root';
    conf::$senha = 'root';
    conf::$base = 'webpkjsbadmin';
    conf::$session = 'database';
}
