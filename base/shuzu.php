<?php
header("Content-type:text/html;charset=utf-8");
ini_set('display_errors', '1');
ini_set('error_reporting', E_ALL);

/*
$arr[1]='1';
$arr[2]='2';

var_dump($arr[0]);*/


//$arr=array('hcy','love','cmj',2019);
//var_dump($arr);

/*$arr = array(
    array(1, 2, 3),
    array(true, false, NULL),
    array('h', 'c', 'y')
);*/


//$arr = [1, 2, 34, 5];

//var_dump($arr[0][0]);

//一维数组遍历
//foreach ($arr as $key => $value) {
//    echo $key, "  ", $value, "<br>";
//}

//foreach ($arr as $value) {
//
//    foreach ($value as $k=>$v){
//        echo $k, "  ", $v, "<br>";
//    }
//}


/*for ($i=0;$i<count($arr);$i++){
    var_dump($arr[$i]);
    echo "<br>";
}*/

//$arr=array(1,'name'=>'hcy2019','age'=>22,'sex'=>'男',5);
//
////each函数指针操作
//
//
//
//while (list($key,$value)=each($arr)){
//   echo "key==".$key." "."value==".$value."<br>";
//}


/*function func1($index)
{
    if ($index <= 0) {
        return 0;
    }

    if ($index == 1 || $index == 2) {
        return 1;
    }
    return func1($index - 1) + func1($index - 2);
}


function func2($index)
{
    $sum = 0;
    for ($i = 1; $i <= $index; $i++) {
        $sum += func1($i);

    }

    return $sum;
}

echo func1(15);*/


$arr = array(1, 4, 2, 9, 7, 5, 8,7,1);
function bubble_sort()
{
    global $arr;
    //确定轮数
    //每轮最右边都会确定一位数字
    for ($i = 0; $length = count($arr), $i < $length; $i++) {
        for ($j=0;$j<$length-1-$i;$j++){
            if ($arr[$j]>$arr[$j+1]){
                $temp=$arr[$j+1];
                $arr[$j+1]=$arr[$j];
                $arr[$j]=$temp;
            }
        }
    }

    print_r($arr);
}

bubble_sort();


