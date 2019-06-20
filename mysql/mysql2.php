<?php
//建立数据库连接
$connection=mysqli_connect('127.0.0.1','root','12345678','stus');
////执行删除操作
//$query=mysqli_query($connection,'Delete   from  stud  where  id=32');

//执行插入操作
;
$query=mysqli_query($connection,'insert into users value (null,\'李四\',1,\'1993-08-28\',null)');

include_once '../utils/LogUtils.php';

$affectedRows=mysqli_affected_rows($connection);//执行数据库操作影响的行数


toast($affectedRows);


mysqli_set_charset($connection,'utf8');