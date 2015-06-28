<?php

return array(
    'cache_type' => 'apc',//APC, Memcache, JSON
    'caching' => array(
        'disable_on_post' => true,
        'directory_store_time' => 0,
        'directory_scans'   => false,
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
    ),
    'javascript_include' => true,
    'minify_cache' => true,
    'heavy_minification' => true,
);