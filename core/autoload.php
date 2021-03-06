<?php
require(dirname(__FILE__) . '/_classes/cache.php');
require(dirname(__FILE__) . '/_classes/config.php');

use IPS\core\classes\cache;
use IPS\core\classes\config;

if (config::core('caching')['directory_scans'] && cache::fetch('core_structure')) {
    $dir_structure = unserialize(cache::fetch('core_structure'));
} else {
    $dir_structure = glob(dirname(__FILE__) . '/_*/*.php');
    cache::store('core_structure', $dir_structure, config::core('caching')['directory_store_time']);
}

array_map(function($value) {
    include_once $value;
}, $dir_structure);
