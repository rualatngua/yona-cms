<?php

return array(
    'database' => array(
        'adapter' => 'Mysql',
        'host' => getenv('DB_3306_TCP_ADDR'),
        'username' => 'root',
        'password' => 'vagrant',
        'dbname' => 'yona',
        'charset' => 'utf8',
    ),
    'cache' => 'file', // file, memcache
    'metadata_cache' => 'memory', // memory, apc
);
