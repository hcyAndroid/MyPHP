<?php
//var_dump($_POST);
$result = $_POST;
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
}



//var_dump($result['']);


//foreach ($_POST as $key => $value) {
//
//
//
//}