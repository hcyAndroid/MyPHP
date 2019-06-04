<?php
//var_dump($_POST);


if ($_SERVER['REQUEST_METHOD'] === "POST") :

    if (empty($_POST['user_name'])) :
        //要么没提交，要么为空
        $userName_error = 'user_name要么没提交，要么为空';
    else:
        $username = $_POST['user_name'];
    endif;
    if (empty($_POST['password'])):
        //要么没提交，要么为空
        $password_error = 'password要么没提交，要么为空';
    endif;
    if (empty($_POST['password_s'])):
        //要么没提交，要么为空
        $password_s_error = 'password_s要么没提交，要么为空';
    endif;

    if (empty($_POST['is_agree'])):
        //要么没提交，要么为空
        $is_agree_error = 'is_agree要么没提交，要么为空';
    endif;

//    if ($_POST['password_s'] === $_POST['password']) {
//        $userinfo = $_POST['user_name'] . '|' . $_POST['password'] . "\n";
//        $filename = "../file/testfile.text";
//        //写入文件
//        $handle = fopen($filename, "a+");
//        $str = fwrite($handle, $userinfo);
//        fclose($handle);
//        echo "注册成功";
//    } else {
//        echo '密码不一致';
//    }


endif; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

    <table>
        <tr>
            <td>用户名：</td>
            <td><label for="user_name"><input type="text" name="user_name" id="user_name" value="<?php echo isset($username)?$username:"hcy2018"?>"></label></td>
            <?php if ($userName_error): ?>
                <td><?php echo $userName_error ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>密码:</td>
            <td><label for="password"> <input type="password" name="password" id="password"> </label></td>

            <?php if ($password_error): ?>
                <td><?php echo $password_error ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>确认密码:</td>
            <td><label for="password_s"><input type="password" name="password_s" id="password_s"></label></td>
            <?php if ($password_s_error): ?>
                <td><?php echo $password_s_error ?></td>
            <?php endif; ?>

        </tr>
        <tr>
            <td><label><input type="checkbox" name="is_agree" value="1"> 统一协议</label></td>
            <?php if ($is_agree_error): ?>
                <td><?php echo $is_agree_error ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>
                <button>注册</button>
            </td>

        </tr>
    </table>


</form>
</body>
</html>


/*$result = $_POST;
$user_name = $result['user_name'];
$password = $result['password'];
$password_s = $result['password_s'];


if ($user_name === '' || $password === '' || $password_s === '' || !array_key_exists('is_agree', $result)) {
if ($user_name === '') {
echo 'user_name不能为null';
} else if ($password === '') {
echo 'password不能为null';
} else if ($password_s === '') {
echo 'password_s不能为null';
} else if (!array_key_exists('is_agree', $result)) {
echo '协议没确认';
}

} else {

if ($password_s === $password) {
$userinfo = $user_name . '|' . $password . "\n";
$filename = "../file/testfile.text";
//写入文件
$handle = fopen($filename, "a+");
$str = fwrite($handle, $userinfo);
fclose($handle);

//
//
//file_put_contents($filename, $userinfo, FILE_APPEND);


} else {
echo '密码不一致';
}
}*/


//var_dump($result['']);


//foreach ($_POST as $key => $value) {
//
//
//
//}