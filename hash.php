<?php
require_once('../../vendor/autoload.php');

use Predis\Client;

$redis = new Client();

$redis->hset('user:100', 'name', 'bambang');
$redis->hset('user:100', 'age', 14);
$redis->hset('user:100', 'email' , 'bambang@gmail.com');

print_r($redis->hgetall('user:100'));
echo $redis->hget('user:100', 'name') . "\n";
echo $redis->hget('user:100', 'age') . "\n";
echo $redis->hget('user:100', 'email') . "\n";

//list of the keys from a hash
print_r($redis->hkeys('user:100'));
//list of the values form a hash
print_r($redis->hvals('user:100'));

echo $redis->hstrlen('user:100', 'name') . "\n";
echo $redis->hlen('user:100') . "\n";
//check if exists, return 1 if true 0 if false
echo $redis->hexists('user:100', 'email') . "\n";
echo $redis->hexists('user:100', 'birth') . "\n";

$redis->hdel('user:100', 'age');