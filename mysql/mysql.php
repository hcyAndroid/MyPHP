<?php
//TODO:建立数据库连接
include_once '../utils/LogUtils.php';
$connection = @mysqli_connect('127.0.0.1', 'root', '12345678', 'stus');
toast($connection);
if (!$connection) {
    exit('mysql连接失败');
} else {
    echo 'mysql连接成功';
}
//TODO:数据库操作
//基于数据库连接对象，执行一次数据库操作
$query = mysqli_query($connection, 'select * from stud');
toast($query);
if (!$query) {
    exit('mysql数据库操作失败');
    //return;
}
$arr = array();
while ($row = mysqli_fetch_assoc($query)) {
    $arr[] = $row;
}


//for ($i=0;$i<$query->num_rows;$i++){
//    $arr[] = mysqli_fetch_assoc($query);
//}
toast($arr);
//释放查询操作
mysqli_free_result($query);
//断开connection连接
mysqli_close($connection);



//toast(mysqli_fetch_assoc($query));
//toast(mysqli_fetch_assoc($query));
//toast(mysqli_fetch_assoc($query));
//toast(mysqli_fetch_assoc($query));
//toast(mysqli_fetch_assoc($query));
//toast(mysqli_fetch_assoc($query));
//toast(mysqli_fetch_assoc($query));
//toast(mysqli_fetch_assoc($query));

