<?php
require_once('../../vendor/autoload.php');

use Predis\Client;

$redis = new Client();

$redis->setex('server:name', 10 , 'local');
$run = true;

while ($run) {
    $servername = $redis->get('server:name');
    echo $servername . "\n";

    $ttl = $redis->ttl('server:name');
    echo $ttl . "\n";

    sleep(1);

    if ($ttl < 2) {
        $run = false;
    }
}

?>