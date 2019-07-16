<?php
include_once '../utils/LogUtils.php';
header('Content-Type:application/json');
$arr = array(array('src' =>
    '../file/1-small.jpg',
    'name' => '女1',
    'pic'=>'../file/1.jpg'),
    array('src' =>
        '../file/2-small.jpg',
        'name' => '女2',
        'pic'=>'../file/2.jpg'),
    array('src' =>
        '../file/3-small.jpg',
        'name' => '女3',
        'pic'=>'../file/3.jpg'),
    array('src' =>
        '../file/4-small.jpg',
        'name' => '女4',
        'pic'=>'../file/4.jpg'));
$json_str=json_encode($arr);
echo $json_str;

