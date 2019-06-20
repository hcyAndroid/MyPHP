<?php

function add()
{
    include_once '../utils/LogUtils.php';

    toast($_POST);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        if (!isset($_POST['username'])) {
            $GLOBALS['error_message'] = '用户名必填';
            return;
        }

        if (empty($_POST['username'])) {
            $GLOBALS['error_message'] = '用户名必填2';
            return;
        }


        if (!isset($_POST['sex'])) {
            $GLOBALS['error_message'] = '性别必填';
            return;
        }

        if (empty($_POST['sex'])) {
            $GLOBALS['error_message'] = '性别必填2';
            return;
        }

        if (!isset($_POST['birthday'])) {
            $GLOBALS['error_message'] = '生日必填';
            return;
        }

        if (empty($_POST['birthday'])) {
            $GLOBALS['error_message'] = '生日必填2';
            return;
        }


       /* if (!isset($_POST['avatar'])) {
            $GLOBALS['error_message'] = '请上传头像';
            return;
        }

        if (empty($_POST['avatar'])) {
            $GLOBALS['error_message'] = '请上传头像2';
            return;
        }*/


        $source = $_FILES['avatar'];

        toast($source);

        if ($source['size']<1*1024){
            $GLOBALS['error_message'] = '头像不能小于1K';
            return;
        }

        if ($source['size']>3*1024*1024){
            $GLOBALS['error_message'] = '头像不能大于3M';
            return;
        }

        $allowed_type_image = array('image/png','image/jpeg');
        if (!in_array($source['type'], $allowed_type_image)) {
            $GLOBALS['error_message']  = $source['name'] . '文件格式非法,只能上传图片';
            return;
        }

        //打印另一个文件的扩展名
        toast(pathinfo($source['name'],PATHINFO_EXTENSION));

        $imgPath='../file/'.uniqid() . '-' . $source['name'];

        if (!move_uploaded_file( $source['tmp_name'],$imgPath)){
            $GLOBALS['error_message'] = '提交文件失败';
            return;
        }










        $gender = $_POST[sex] == '1' ? '0' : '1';

        $username = $_POST['username'];

        $birthday = $_POST['birthday'];


        /*   $connection=mysqli_connect('127.0.0.1','root','12345678','stus');

           if (!$connection){
               exit("数据库连接失败");
           }

           //$sql='insert into users values(null,'.$_POST['username'].','.$gender.','.$_POST['birthday'].',null'.')';

           $insert= mysqli_query($connection,"insert into users values(null,'$username','$gender','$birthday',null)");


           toast(mysqli_affected_rows($connection));*/


        //toast($sql);

        $conenction = new mysqli('127.0.0.1', 'root', '12345678', 'stus');

        if ($conenction->connect_error) {
            die("连接失败");
        }
        echo "连接成功";


        $str = "insert into users values (null,'$username','$gender','$birthday','$imgPath')";

        if ($conenction->query($str) === TRUE) {
            echo "插入数据成功";
            header('Location:userlist.php');
        } else {
            echo $conenction->error;
        }


        $conenction->close();
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
    <title>添加用户</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>


<?php if (isset($error_message)): ?>
    <div class="alert alert-danger">
        <?php echo $error_message; ?>
    </div>
<?php endif; ?>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <table class="table-hover">
        <thead>
        <td>姓名</td>
        <td><input type="text" name="username"></td>


        </thead>


        <tr>
            <td>性别</td>
            <td><input type="radio" name="sex" value="1"> 男 <input type="radio" name="sex" value="2"> 女</td>


        </tr>

        <tr>
            <td>生日</td>
            <td><input type="date"  class="form-control" name="birthday"></td>

        </tr>


        <tr>
            <td>头像</td>
            <td><input type="file" name="avatar"></td>
            <!--            --><?php //if (isset($GLOBALS['noImg'])): ?>
            <!--                <td>请上传头像</td>-->
            <!--            --><?php //endif; ?>
        </tr>

    </table>

    <button class="btn-primary btn-block">提交</button>
</form>
</body>
</html>
