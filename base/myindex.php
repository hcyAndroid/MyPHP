<?php


//定义变量
/**
 * 以$开头，由字母数字下划线构成,但不能以数字开头
 */
//$var1 = 100;
//$var1 = "hcy";

//$a='b';
//$b="bb";
//echo $$a;

//$var1 = "a";
//$var2 = "aa";

//echo $$var1;


//echo $var1;
//unset($var1);
////$var1=19.10;
//echo $var1;

//$1var;
//预定义变量
$_GET; //获取所有表单以get提交的数据
$_POST; //获取所有表单以post提交的数据
$_REQUEST;//get 和 post 提交的都会保存
$GLOBALS;//所有的全局变量
$_SERVER;//服务器信息
$_SESSION;//session会话数据
$_COOKIE;//cookie  会话数据
$_ENV;//环境信息
$_FILES;//用户上传的文件信息
//可变变量

/*$name = "hcy";

$hcy = "myindex";*/


//echo $$name;

//变量传值
/*$num1 = "hcy";
$num2 = &$num1;

$num1="hcy2019";
echo $num1,$num2;*/

//常量
//define("myAge",2010000);
//
//echo constant("myAge");
//
//const mySex=3.14*10/1;
//
//
//echo  constant("mySex");
//系统常量
//echo  PHP_VERSION;
//echo PHP_INT_SIZE;

//echo PHP_INT_MAX;

//echo PHP_INT_MIN;
//
//echo __FILE__;
//echo '<br>';
//echo __DIR__;
//echo '<br>';
//echo __NAMESPACE__;
//echo '<br>';
//echo __CLASS__;


//数据类型的转换
//var_dump(is_bool(true))  ;


//十进制转二进制
//echo decbin(100);

//echo bindec(decbin(100));
//十进制转八进制
//echo decoct(100);
//echo octdec(decoct(100));
//十进制转16进制
//echo dechex(100);
//echo hexdec(dechex(100));

//$AAA=10;
//$aaa=11;
//echo $AAA,"<br>",$aaa;


//var_dump(@10/0);
//
//$a=123;
//$b=$a++;
//$c=++$a;
//
////$a.=$b;
//echo $b,"<br>",$c;
//echo  $a==$b;
//var_dump($a==$b);
//
//var_dump($a===$b);

//连接运算符   .:将两个字符串连接成一个字符串

//$c="hcy";
//$d="cmj";
//
//$e=$c.$d;
//
//echo $e,"<br>",$c,"<br>",$d;
//echo "<a href='http://www.baidu.com'>百度吧</a>";
//
//echo  decbin(-5);

//&按位与值，两个位都为1，结果为1，否则为0

//条件分支

//if ($a==10){
//
//}elseif($a>=10){
//    echo "hcy";
//}

//for循环
//$a =20;
//for ($i=1;$i<=$a;$i++){
//    echo $i,"<br>";
//}

//while ($a >= 1) {
//    echo $a , "<br>";
//    $a--;
//}

//$i=10;
//
//do{
//    if ($i%2==0){
//        echo $i,"<br>";
//    }
//    $i--;
//}while($i>0);

//流程控制的替代语法

//<table border="1" width="100">
//	<tr></tr>
//	<tr></tr>
//	<tr></tr>
//</table>
//echo  print 'my2019';

//$a="hellomy2019";
//print_r(date());
//print_r(date("y-M-d,H:m:s"));
print_r(date("Y-m-d,H:i:s"));
echo '<br>';
print_r(time());
echo '<br>';
print_r(microtime());

//多次导入
//include 'table.php';
//指导人一次
//include_once 'table.php';
//多次导入
//require 'table.php';
////指导入一次
//require_once 'table.php';





//区别

include 'a.php';

echo "hello,world";


//文件加载的原理













