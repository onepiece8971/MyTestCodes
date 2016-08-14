<?php
try {
    $redis = new redis();
    $result = $redis->connect('192.168.253.248', 6379);
    var_dump($result);
} catch (Exception $e) {
    var_dump($e);
}