<?php


error_reporting(E_ALL);
ini_set('display_errors', '1');


//
//$a="hcy2011";
//
//
//function  getName($name='hcy2017'){
//
//    //$GLOBALS['a']=$name;
//
//    //return $name;
//}
//
//
////echo getName('hcy2020');
//
//
////echo $a;
///
///


//$a="555555";
//
//function  test(){
//    global  $a;
//    echo  $a;
//}
//
//
//test();


//function test()
//{
//    echo "hellow";
//}
//
//$a = 'test';
//$a();


//$a=function(){
//    echo "hellow111";
//};
//
//$a();
//
//(function(){
//    echo "hellow2222";
//})();


function  func1(){
    $num=20001;
    $func2=function () use ($num){
        echo $num;
    };

    $func2();
}


func1();


