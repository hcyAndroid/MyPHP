<?php
//echo  time();
date_default_timezone_set("PRC");
//echo date("Y-m-d,H:i:s",time());

$time='2019-05-30,15:25';

//先转为时间戳
$timestmp=strtotime($time);

echo  date('Y?m?d<b\r>H:i:s',$timestmp);

define("PI",3.14);


echo 1*PI;

require  'table.php';