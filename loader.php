<?php
if (!defined('ips_initiated')) {
    $start = microtime(true);
}

require_once('core/autoload.php');

use IPS\core\classes\initCore;


// 
if (!defined('ips_initiated')) {
    define('ips_path', dirname(__FILE__));
    define('ips_initiated', true);
   
    $core = new initCore;
    
    $core->runModulesEvent('startModule');
    
    if (defined('stop_execution'))
        exit();
} else {
    
    $core->runModulesEvent('endModule');
    
    $end =  microtime(true) - $start;
    echo '<br>Overhead: ' . $end;
}