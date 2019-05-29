<?php
header('Content-type:text/html;charset=utf-8');
ini_set('display_errors', '1');
ini_set('error_reporting', E_ALL);
$arr=array('name'=>"0hcy",'age'=>123,'sex'=>'男');

//foreach ($arr as  $key=>$value){
//
//    echo $key."==".$value.'<br>';
//}

var_dump(array_keys($arr));
echo '<br>';

var_dump(array_values($arr));

echo '<br>';

var_dump(array_key_exists("name",$arr));


//if (isset($arr['names'])){
//
//}


if (empty($arr['name'])){
    echo "KKK";
}else{
    echo "LLL";
}

