<?php

$arr=array('name'=>'hcy2019','age'=>123,'sex'=>'男');

//foreach ($arr as  $key=>$value){
//
//    echo $key."==".$value.'<br>';
//}

var_dump(array_keys($arr));
echo '<br>';

var_dump(array_values($arr));

echo '<br>';

var_dump(array_key_exists("name",$arr));

