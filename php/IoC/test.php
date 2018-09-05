<?php

/**
 * Created by PhpStorm.
 * User: jiayao
 * Date: 2016/9/1
 * Time: 21:37
 */
require __DIR__.'/Container.php';


interface TrafficTool
{
    public function go();
}

class Train implements TrafficTool
{

    public function go()
    {
        echo "train....";
    }
}

class Leg implements TrafficTool
{
    public function go()
    {
        echo "leg..";
    }
}

class Traveller
{
    /**
     * @var Leg|null|Train
     * 旅行工具
     */
    protected $_trafficTool;

    public function __construct(TrafficTool $trafficTool)
    {
        $this->_trafficTool = $trafficTool;
    }

    public function visitTibet()
    {
        $this->_trafficTool->go();
    }
}

//实例化IoC容器
$app = new Container();

//绑定某一功能到IoC
$app->bind('TrafficTool', 'Train');
$app->bind('travellerA', 'Traveller');

// 实例化对象
$tra = $app->make('travellerA');
$tra->visitTibet();
