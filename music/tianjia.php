<?php

function addMusic()
{

    if (empty($_POST['title'])) {

        $GLOBALS["error_msg"] = '请输入音乐标题';

        return;
    }


    if (empty($_POST['artist'])) {

        $GLOBALS["error_msg"] = '请输入歌手名';

        return;
    }

    var_dump($_FILES['source']);
    //校验文件逻辑
    if (empty($_FILES['source'])) {
        //客户端没提交音乐文件

        $GLOBALS["error_msg"] = '请提交音乐文件';
        return;
    }

    $source = $_FILES['source'];

    if ($source['error'] !== UPLOAD_ERR_OK) {

        $GLOBALS["error_msg"] = '请提交音乐文件2';
        return;
    }


    //校验文件大小

    if ($source['size'] >= 5 * 1024 * 1024) {
        $GLOBALS["error_msg"] = '文件超出1M';
        return;
    }

    if ($source['size'] <= 1 * 10) {
        $GLOBALS["error_msg"] = '文件小于10K';
        return;
    }
    //校验文件类型

    $allowed_type = array('audio/mp3', 'audio/wma', 'audio/mpeg');

    if (!in_array($source['type'], $allowed_type)) {
        $GLOBALS["error_msg"] = '文件格式非法,只能上传audio/mp3,audio/wma,audio/mpeg';
        return;
    }


    //长传了文件,但还在临时目录中，开始移动
    //将上传的文件重新命名

    $source_mp3 = uniqid() . '-' . $source['name'];

    if (!move_uploaded_file($source['tmp_name'], '../file/' . $source_mp3)) {

        $GLOBALS["error_msg"] = '提交音乐文件失败';
        return;
    }


    var_dump($_FILES['images']);
    //校验文件逻辑
    if (empty($_FILES['images'])) {
        //客户端没提交音乐文件

        $GLOBALS["error_msg"] = '请提交图片文件';
        return;
    }

    $image = $_FILES['images'];

    //多文件长传
    for ($i = 0; $i < count($image['name']); $i++) {
        //校验是否上传成功
        if ($image['error'][$i] !== UPLOAD_ERR_OK) {
            $GLOBALS["error_msg"] = $image['name'][$i] . '文件上传失败';
            return;
        }
        //校验文件类型
        $allowed_type_image = array('image/png');
        if (!in_array($image['type'][$i], $allowed_type_image)) {
            $GLOBALS["error_msg"] = $image['name'][$i] . '文件格式非法,只能上传图片';
            return;
        }
        //校验文件大小

        if ($image['size'][$i] >= 5 * 1024 * 1024) {
            $GLOBALS["error_msg"] = $image['name'][$i] . '文件超出1M';
            return;
        }

        if ($image['size'][$i] <= 1 * 10) {
            $GLOBALS["error_msg"] = $image['name'][$i] . '文件小于10K';
            return;
        }

        //长传了文件,但还在临时目录中，开始移动
        //将上传的文件重新命名
        $source_images[$i] = uniqid() . '-' . $image['name'][$i];
        if (!move_uploaded_file($image['tmp_name'][$i], '../file/' . $source_images[$i])) {

            $GLOBALS["error_msg"] = $image['name'][$i] . '提交图片文件失败';
            return;
        }

    }


//    if ($image['error'] !== UPLOAD_ERR_OK) {
//
//        $GLOBALS["error_msg"] = '请提交图片文件';
//        return;
//    }


    //校验文件大小
//
//    if ($image['size'] >= 5 * 1024 * 1024) {
//        $GLOBALS["error_msg"] = '文件超出1M';
//        return;
//    }
//
//    if ($image['size'] <= 1 * 10) {
//        $GLOBALS["error_msg"] = '文件小于10K';
//        return;
//    }
//    //校验文件类型
//
//    $allowed_type_image = array('image/png');
//
//    if (!in_array($image['type'], $allowed_type_image)) {
//        $GLOBALS["error_msg"] = '文件格式非法,只能上传图片';
//        return;
//    }


//    //长传了文件,但还在临时目录中，开始移动
//    //将上传的文件重新命名
//    $source_images = uniqid() . '-' . $image['name'];
//
//    if (!move_uploaded_file($image['tmp_name'], '../file/' . $source_images)) {
//
//        $GLOBALS["error_msg"] = '提交图片文件失败';
//        return;
//    }


    $title = $_POST['title'];
    $artist = $_POST['artist'];

    //先读出来在覆盖
    $filestr = file_get_contents('../file/test_json');

    $arr = json_decode($filestr, true);

    $arr[] = array(
        'id' => uniqid(),
        'title' => $title,
        'artist' => $artist,
        'images' => $source_images,
        'source' => $source_mp3
    );


    //序列化转json

    $json = json_encode($arr);


    file_put_contents('../file/test_json', $json);


    echo '提交成功';

    header('Location:list.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    addMusic();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container mt-1">
    <h1>添加音乐</h1>

    <?php if (isset($error_msg)): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error_msg ?>
        </div>
    <?php endif; ?>

    <hr>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="title">标题</label>
            <input type="text" id="title" name="title" class="form-control" placeholder="请输入音乐标题">
            <small class="form-text text-muted">请输入音乐标题</small>
        </div>
        <div class="form-group">
            <label for="artist">歌手</label>
            <input type="text" id="artist" name="artist" class="form-control">

        </div>

        <!--        multiple可以让一个文件域多选-->
        <div class="form-group">
            <label for="images">海报</label>
            <input type="file" id="images" name="images[]" class="form-control" multiple>

        </div>


        <div class="form-group">
            <label for="source">音乐</label>
            <input type="file" id="source" name="source" class="form-control" accept="audio/*">

        </div>


        <button class="btn btn-block btn-primary">保存</button>

    </form>

</div>
</body>
</html>
