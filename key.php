<?php
require_once('../../vendor/autoload.php');

use Predis\Client;

try {
    $redis = new Client();

    $redis->set('server:name', 'local');
    $servername= $redis->get('server:name');

    echo "This is the server name = " . $servername;    
} catch (Exception $e) {
    echo "gagal = " . $e->getMessage();
}
?>