<?php

//让浏览器以utf-8的格式解析
header('Content-type:text/html;charset=utf-8');

ini_set('display_errors', '1');
ini_set('error_reporting', E_ALL);
//error_reporting(E_ALL);


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

//
//function  func1(){
//    $num=20001;
//    $func2=function () use ($num){
//        echo $num;
//    };
//
//    $func2();
//}
//
//
//func1();


//function f()
//{
//    echo "hekk";
//}
//
//function_exists('f');
//
//
//echo function_exists('f');


/*E_USER_NOTICE
E_USER_WARNING
E_USER_ERROR
E_USER_DEPRECATED*/


//trigger_error("空指针异常", E_USER_DEPRECATED);


/**
 * @param $errNum
 * @param $errMsg
 * @param $errFile
 * @param $errLine
 * @param $errContext
 */

function error_msg($errNum, $errMsg, $errFile, $errLine, $errContext)
{
    //查看当前系统可以看到的错误
    if (!(error_reporting() & $errNum)) {
        return false;
    }
    switch ($errNum) {
        case E_ERROR:
        case E_USER_ERROR:
            echo "在" . $errFile . "文件里的第" . $errLine . "行发生fatal Error,错误信息为:" . $errMsg;
            break;
        case E_WARNING:
        case E_USER_WARNING:
            echo "在" . $errFile . "文件里的第" . $errLine . "行发生Warning,错误信息为:" . $errMsg;
            break;

        case E_NOTICE:
        case E_USER_NOTICE:
            echo "在" . $errFile . "文件里的第" . $errLine . "行发生E_NOTICE,错误信息为:" . $errMsg;
            break;

    }
    return true;
}






//修改错误机制

set_error_handler("error_msg");
$a=10;
echo $a/0;

require_once 'table.php';


