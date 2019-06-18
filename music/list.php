<?php
$content = file_get_contents("../file/test_json");

//$arr = json_decode($content,true);//对象转关联数组

$arr = json_decode($content);//对象转关联数组


var_dump($arr); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BootStrap</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

<div class="container">
    <h1 class="display">音乐列表</h1>
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
        <tr>
            <th>标号</th>
            <th>标题</th>
            <th>歌曲</th>
            <th>海报</th>
            <th>音乐</th>
            <th>操作</th>
        </tr>
        <tbody>
        <?php
        foreach ($arr as $keys => $value) :?>
            <tr>
                <td><?php echo $value->id ?></td>
                <td><?php echo $value->title ?></td>
                <td><?php echo $value->artist ?></td>
                <td>
                    <?php
                    foreach ($value->images as $valueImag):?>

                        <img src="<?php echo 'http://hcy2019.io/file/' . $valueImag ?>" alt="">

                    <?php endforeach; ?>


                </td>
                <td>
                    <audio src="<?php echo 'http://hcy2019.io/file/' . $value->source ?>" controls></audio>
                </td>
                <td>
                    <button class="btn btn-danger  btn-sm">删除</button>
                </td>
            </tr>
        <?php endforeach; ?>
        <!-- <tr>
             <td>001</td>
             <td>xxx</td>
             <td>xxx</td>
             <td><img src="" alt=""></td>
             <td>
                 <audio src="" controls></audio>
             </td>
             <td>
                 <button class="btn btn-danger  btn-sm">删除</button>
             </td>
         </tr>-->

        </tbody>
        </thead>
    </table>
</div>

</body>
</html>