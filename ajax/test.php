<?php
//TODO:接受请求返回数据
header("Content-Type:application/json");

if ($_SERVER['REQUEST_METHOD']=='GET'){
    include '../utils/LogUtils.php';
    $id=(int)$_GET['id'];


    $sql = "select * from users where id={$id}";

   // toast($sql);
    include_once '../utils/DbUtils.php';
//
    //toast(getDataFromDb('stus',$sql));

  echo  getDataFromDb('stus',$sql);
}

//include '../utils/LogUtils.php';
//
//$arr=array('name'=>'hcy2','age'=>12,'sex'=>'男');
//
//toast(json_encode($arr));