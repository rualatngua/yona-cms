<?php

return array(
    'database' => array(
        'adapter' => 'Mysql',
        'host' => 'db',
        'username' => 'root',
        'password' => 'vagrant',
        'dbname' => 'yona',
        'charset' => 'utf8',
    ),
    'cache' => 'file', // file, memcache
    'metadata_cache' => 'memory', // memory, apc
);
