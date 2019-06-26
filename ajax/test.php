<?php
//TODO:接受请求返回数据

if ($_SERVER['REQUEST_METHOD']=='GET'){
    include '../utils/LogUtils.php';

    $arr=array('name'=>'hcy','age'=>12,'sex'=>'男');

    toast(json_encode($arr));
}

//include '../utils/LogUtils.php';
//
//$arr=array('name'=>'hcy2','age'=>12,'sex'=>'男');
//
//toast(json_encode($arr));