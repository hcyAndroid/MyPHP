<?php
include_once '../utils/LogUtils.php';
$conenction = mysqli_connect('127.0.0.1', 'root', '12345678', 'stus');

if (!$conenction) {
    exit('数据库建立连接失败');
}

$query = mysqli_query($conenction, 'select * from users');


if (!$query) {
    exit('数据库查询失败');
}

$arr = array();

while ($row = mysqli_fetch_assoc($query)) {

    $arr[] = $row;
}

//toast($arr);

//数据库的释放
mysqli_free_result($query);
mysqli_close($conenction);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户列表</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

<table class="table table-bordered">
    <thead class="table-dark">
    <tr>
        <td>id</td>
        <td>名字</td>
        <td>性别</td>
        <td>生日</td>
        <td>头像</td>
        <td>操作</td>
    </tr>
    </thead>

    <tbody>

    <?php foreach ($arr as $key => $value): ?>
        <tr>
            <td><?php echo $value['id'] ?></td>
            <td><?php echo $value['name'] ?></td>
            <td><?php
                if ($value['gender'] == 0):echo '男';
                elseif ($value['gender'] == 1):echo '女';
                else:echo '太监';
                endif;
                ?></td>
            <td><?php echo $value['birthday'] ?></td>
            <td><img src="<?php echo $value['avatar'] ?>" alt=""></td>
            <td><a href="delete.php?id=<?php echo $value['id'] ?>" class="btn btn-danger"> 删除</a>
                <a href="editer.php?id=<?php echo $value['id'] ?>" class="btn btn-primary"> 编辑</a></td>
        </tr>
    <?php endforeach; ?>


    </tbody>


</table>

</body>
</html>


