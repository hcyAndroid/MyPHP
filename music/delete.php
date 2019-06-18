<?php


$needDeleteId = $_GET['id'];

$str = file_get_contents('../file/test_json');

$jsonObj = json_decode($str, true);//将字符串转json对象


include_once '../utils/LogUtils.php';


foreach ($jsonObj as $key => $obj) {
    if ($obj['id'] !== $needDeleteId) {

        //break;
    } else {
        $index = array_search($obj, $jsonObj);
        //echo "有数据" . $key.'==='.$a['title'].'、、'.$index;
        //从数组中删除
        $delete = array_splice($jsonObj, $index, 1);

        toast($delete);

        var_dump($delete[0]['id']);

        toast($jsonObj);


    }
}


$str_s = json_encode($jsonObj);

file_put_contents('../file/test_json', $str_s);


header('Location:list.php');



//
//







