<?php
header('Content-Type:application/json');

header('Access-Control-Allow-Origin:*');

$data = array(array('name' => 'hcy1', 'age' => 13, 'sex' => '男','address'=>'xixi','hobby'=>'打篮球'),
    array('name' => 'hcy2', 'age' => 133, 'sex' => '男','address'=>'xixi','hobby'=>'打篮球'),
    array('name' => 'hcy3', 'age' => 1345, 'sex' => '男','address'=>'xixi','hobby'=>'打篮球'),
    array('name' => 'hcy4', 'age' => 135, 'sex' => '男','address'=>'xixi','hobby'=>'打篮球'));

echo json_encode($data);





