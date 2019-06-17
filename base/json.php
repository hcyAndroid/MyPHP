<?php
//读取文件);
$json = file_get_contents('../file/test_json');

$arr = json_decode($json);

//var_dump($arr);

foreach ($arr as $value) {
    foreach ($value as  $key => $value){
        echo $key.'===='.$value.'<br>';
    }
    echo '<br>';
    echo '<br>';
}
