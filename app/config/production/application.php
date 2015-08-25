<?php

return array(
    'database' => array(
        'adapter' => 'Mysql',
        'host' => getenv('DB_HOST'),
        'username' => getenv('DB_USER'),
        'password' => getenv('DB_PASS'),
        'dbname' => getenv('DB_NAME'),
        'charset' => 'utf8',
    ),
    'cache' => 'file', // file, memcache
    'metadata_cache' => 'memory', // memory, apc
);
