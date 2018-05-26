<?php
if ($_SERVER['SERVER_NAME'] === 'newbgp.com.br') {
    conf::$dateFormat = 'd/m/Y';
    conf::$servidor = 'sqlite';
    conf::$endereco = '../../banco.sqlite';
    conf::$usuario = 'root';
    conf::$senha = '';
    conf::$base = '';
    conf::$session = 'database';
} else {
    conf::$dateFormat = 'd/m/Y';
    conf::$servidor = 'sqlite';
    conf::$endereco = '../../banco.sqlite';
    conf::$usuario = 'root';
    conf::$senha = '';
    conf::$base = '';
    conf::$session = 'database';
}
