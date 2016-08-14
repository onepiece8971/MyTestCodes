<?php
/**
 * Class Base
 * 静态化－实例化工厂基类
 * Base.php
 */
class Base
{
    public static $logs;
}

class index extends Base {

    public function __construct()
    {
        self::$logs = array('kankan');
    }
}

class index2 extends Base {
  public $name;
}

$index = new index();
$index2 = new index2();
$index2::$logs[] = 'heihei';
var_dump($index2::$logs);

