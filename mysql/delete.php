<?php
if (empty($_GET['id'])){
    exit('没有传id，不合法');
}
$needDeleteID = $_GET['id'];
include_once '../utils/LogUtils.php';
$connection = mysqli_connect('127.0.0.1', 'root', '12345678', 'stus');


$delete = mysqli_query($connection, 'delete from users where id=' . $needDeleteID);

$affectedRow = mysqli_affected_rows($connection);

if ($affectedRow > 0) {
    echo '删除成功';
    header('Location:userlist.php');
} else {
    echo '删除失败'.$connection->error;
}

mysqli_close($connection);









