<?php

$redis = new Redis();

$host = 'redis';
$port = '6379';
$redis->connect($host, $port);
$key = 'key-1';
$value = 'value-1';
$redis->set($key, $value);
$v = $redis->get($key);
echo "key: {$key}", PHP_EOL;
echo "value: {$v}", PHP_EOL;
