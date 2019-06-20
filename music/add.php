<?php

function add()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        /* if (!isset($_POST['singer_name'])) {
             $GLOBALS['noSingerName'] = '歌手名必填';
             return;
         }
         if (empty($_POST['singer_name'])) {
             $GLOBALS['noSingerName'] = '歌手名必填';
             return;
         }


         if (!isset($_POST['age'])) {
             $GLOBALS['noAge'] = '年龄必填';
             return;
         }
         if (empty($_POST['age'])) {
             $GLOBALS['noAge'] = '年龄必填';
             return;
         }


         if (!isset($_POST['sex'])) {
             $GLOBALS['noSex'] = '性别必填';
             return;
         }
         if (empty($_POST['sex'])) {
             $GLOBALS['noSex'] = '性别必填';
             return;
         }*/


//        if (!isset($_POST['img'])) {
//            $GLOBALS['noImg'] = '请上传图片';
//            return;
//        }
//        if (empty($_POST['img'])) {
//            $GLOBALS['noImg'] = '请上传图片';
//            return;
//        }

        //var_dump($_FILES);
        //var_dump($_FILES['img']);

        $file_name = $_FILES['img']['name'];


        echo $file_name;


    }

}

add();


?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加音乐</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <table class="table-hover">
        <thead>
        <td>歌手名</td>
        <td><input type="text" name="singer_name"></td>

        <?php if (isset($GLOBALS['noSingerName'])): ?>
            <td>歌手名必填</td>
        <?php endif; ?>

        </thead>
        <tr>
            <td>年龄</td>
            <td><input type="number" name="age"></td>
            <?php if (isset($GLOBALS['noAge'])): ?>
                <td>年龄必填</td>
            <?php endif; ?>
        </tr>

        <tr>
            <td>性别</td>
            <td><input type="radio" name="sex" value="1"> 男 <input type="radio" name="sex" value="2"> 女</td>
            <?php if (isset($GLOBALS['noSex'])): ?>
                <td>性别必填</td>
            <?php endif; ?>

        </tr>


        <tr>
            <td>图片</td>
            <td><input type="file" name="img"></td>
            <?php if (isset($GLOBALS['noImg'])): ?>
                <td>请上传图片</td>
            <?php endif; ?>
        </tr>

        <tr>
            <td>mp3</td>
            <td><input type="file" name="mp3"></td>
        </tr>
    </table>

    <button class="btn-primary btn-block">提交</button>
</form>
</body>
</html>
