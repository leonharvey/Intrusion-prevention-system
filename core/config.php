<?php

return array(
    'cache_type' => 'apc',//APC, Memcache, JSON
    'caching' => array(
        'directory_scans'   => true,
        'model_queries'     => false,
        'meta_queries'      => false,
        'autoloads'         => false,
        'config'            => false
    ),
    'database' => array(
        'user'  => 'leonharvey',
        'db'    => 'ips',
        'pass'  => '',
        'host'  => '127.0.0.1',
    )
    
);