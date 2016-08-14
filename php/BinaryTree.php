<?php
// 模拟二叉树
$a = array(
    'val' => 1,
    'left' => array(
        'val' => 2,
        'left' => array(
            'val' => 3,
        ),
        'right' => array(
            'val' => 4,
        ),
    ),
    'right' =>  array(
        'val' => 5,
        'right' =>  array(
            'val' => 6,
        ),
    ),
);
function fa($p)
{
    echo $p['val']."<br />";
    if (isset($p['left'])) {
        fa($p['left']);
    }
    if (isset($p['right'])) {
        fa($p['right']);
    }
}
fa($a);