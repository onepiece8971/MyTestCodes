<?php

//过滤类
class Lib_Filter_FilterData
{
    public static function verify($data, $model, &$message)
    {
        if (empty($data)) return false;
        foreach ($data as $key => $value) {
            foreach ($model[$key] as $k => $v) {
                if (!self::$k($value)) { //调用类中判断方法,返回true或false
                    array_push($message, $v);
                    return false;
                }
            }
        }
        return true;
    }

    private function not_null($value)
    {
        return empty($value) ? false : true;
    }
} 

//类model
class DataModel
{
    public static function data_filter()
    {
        return array(
            'id' => array('not_null' => "id not null"),
            'qq' => array('not_null'=>"qq not null"),
        );
    }
}

//调用方法
$data = array(
    'id' => "sdfsd",
    'qq' => ""
);
$message = array();
$a = Lib_Filter_FilterData::verify($data, DataModel::data_filter(), $message);
var_dump($a,$message);
