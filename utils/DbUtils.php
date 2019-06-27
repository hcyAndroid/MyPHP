<?php

function getDataFromDb($dbName, $sql)
{
    $connection = new mysqli('127.0.0.1', 'root', '12345678', $dbName);
    if (!$connection) {
        return '数据库连接失败' . $connection->error;
    }

    $query = $connection->query($sql);

    if (!$query) {
        return '数据库查询失败' . $connection->error;
    }

    $arr=array();
    while ($row = $query->fetch_assoc()) {
        $arr[] = $row;
    }


    return json_encode($arr);

}
