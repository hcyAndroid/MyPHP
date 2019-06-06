<?php


function testfiles()
{
    if (!isset($_FILES['avatar'])):
        echo "客户端提交的表单根本没有文件域";
        return;
    endif;

    $files = $_FILES['avatar'];

    if ($files['error'] != UPLOAD_ERR_OK) {
        echo '上传失败';
        return;
    }
    //接受文件
    //将文件的临时目录移动到网站的根目录
    $isMoveSuccess = move_uploaded_file($files['tmp_name'], '../file/' . $files['name']);
    if (!$isMoveSuccess){
       echo "移动失败";
       return;
    }

    echo '移动成功';

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //接受文件
    var_dump($_FILES);
    testfiles();

}


?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">


    <input type="file" name="avatar">

    <button>提交</button>


</form>


</body>
</html>