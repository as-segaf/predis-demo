<?php
require_once('../../vendor/autoload.php');

use Predis\Client;

$redis = new Client();

$redis->set('server:id', 1);

for ($i=0; $i < 10 ; $i++) {  
    echo "server:id = " . $redis->get('server:id') . "\n";
    $redis->incr('server:id');
}

echo "\n";

for ($i=0; $i < 10 ; $i++) { 
    $redis->decr('server:id');
    echo "server:id = " . $redis->get('server:id') . "\n";
}