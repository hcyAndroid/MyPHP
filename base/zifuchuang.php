<?php


//nowdoc
/*



$b=<<<eod
asdasdasdascascasdasdasdasdas
eod;

echo $a."<br>";

echo $b."<br>";*/


/*$a=<<<eod
myhcy2019dsadascascascsacdas
asdsadasdas
eod;


$a="hcy2019";

$tag="哈哈哈哈";*/

//$tag = <<<eod
//    <script>
//        alert('$a')
//    </script>
//eod;
//
//echo $tag;


//strlen($a);
//echo strlen($a),"<br>",strlen($tag),"<br>";
//echo mb_strlen($a),"<br>",mb_strlen($tag,"utf-8");


////数组转字符串
//$list = [1, 2, 3,"hcy"];
//echo implode('^',$list);//以什么连接

//字符串转数组
//$str='hcy2019';
////echo explode("",$str,0) ;
//print_r (explode("",$str,1));

//$str = 'one,two,three,four';
//
//// 零 limit
//print_r(explode(',',$str,0));

//var_dump(str_split($str,1));//指定长度拆分字符串得到数组


//$str="6766555";
//
//echo strstr($str,'7');//找到一个字符'7'并往后截取

//echo substr($str,0,3);//指定截取开始位置和截取字符的个数


//echo  trim($str);//去除两边的空格


//查找字符串首次出现的位置
$str="上山打老虎2019hcy";

echo strlen($str)."<br>";


echo mb_strlen($str);//获取宽字符的长度，能准确获取中文+英文的真实长度


phpinfo();


//echo strpos($str,'y');
//最后一次出现的位置
//echo strrpos($str,'y');
//$str="hcyy2019";
//将字符串的某个部分替换成另一个部分组成新的字符串
//echo str_replace("hcyy","cmj",$str);




