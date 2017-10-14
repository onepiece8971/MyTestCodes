<?php
/*try {
    $redis = new redis();
    $result = $redis->connect('192.168.253.248', 6379);
    var_dump($result);
} catch (Exception $e) {
    var_dump($e);
}*/

$ar = array(1,2,3);
$ar2 = array(0,2,4,6,8);
foreach ($ar as $a) {
    foreach ($ar2 as $a2) {
        if ($a2 == 6) {
            continue 2;
        }
        echo $a2."<br />";
    }
    echo $a."------<br />";
}