<?php

require './iasyn.php';

class asyn implements iasyn
{

    const RedisHost = '192.168.31.21';
    public $token;

    public function send($callback)
    {
        $callback('hello world');
    }

    public function init()
    {
        $this->send(function ($result) {
            $redis = new Redis();
            $redis->connect(self::RedisHost, 6379);
            $redis->set('result', $result); // 这里用redis代替swoole进程通信
        });
        return $this;
    }

    public function getResult()
    {
        $redis = new Redis();
        $redis->connect(self::RedisHost, 6379);
        return $redis->get('result');
    }

}
