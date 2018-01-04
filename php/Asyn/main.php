<?php
/**
 * yield协成异步示例.
 */

require './asyn.php';

function init()
{
    $asyn = new asyn();
    // $init这里没有被赋值,只是执行了yield后面的方程.
    // 其实就是将yield后面的表达式变成了异步执行.
    $init = yield $asyn->init();
    var_dump($init);
}

$asyn = new asyn();
$a = init(); // 这里只返回Generator对象,什么都没执行
$a->send($asyn->getResult()); // 这里把result结果推送到yield处,使result赋值给$init
$a->getReturn(); // 这里开始执行
