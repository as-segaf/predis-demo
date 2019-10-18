<?php
require_once('../../vendor/autoload.php');

use Predis\Client;

try {
    $redis = new Client();
    echo "Connection to redis has been etablished...\n";

} catch (Exception $e) {
    die ($e->getMessage());
}
?>