<?php
include_once '../../utils/LogUtils.php';
define('random_start', 1);
define('random_end', 100);

if (!isset($_COOKIE['random_num'])) {
    $random_num = random_int(random_start, random_end);
    //将随机数存入cookie
    setcookie("random_num", $random_num);
    setcookie("guess_times", 10);

} else {
    $random_num = $_COOKIE['random_num'];

}
$GLOBALS['guess_times'] = 10;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $GLOBALS['guess_times'] = $_COOKIE['guess_times'];
    $last_guess = $_COOKIE['last_guess_num'];
    toast($_POST);
    guess($random_num);

}

function guess($random_num)
{


    if (!isset($_POST['num'])) {
        $GLOBALS['error_msg'] = '请输入一个整数1';
        return;
    }

    if ($_POST['num'] === '') {
        $GLOBALS['error_msg'] = '请输入一个整数';
        return;
    }

    if ($_POST['num'] < random_start || $_POST['num'] > random_end) {
        $GLOBALS['error_msg'] = '请输入一个在' . random_start . '~' . random_end . '范围内的一个整数';
        return;
    }

    $mynum = $_POST['num'];//我猜的数字

    if ($mynum === $random_num) {
        //清空cookie
        $GLOBALS['error_msg'] = '猜对了老弟,正确的数字就是' . $random_num;
        setcookie("random_num");
        setcookie("last_guess_num");
        setcookie("guess_times");
        return;

    }

    if (!isset($_COOKIE['last_guess_num'])) {
        //第一次猜
        if ($mynum > $random_num) {
            $GLOBALS['error_msg'] = '猜错了老弟!!数字在' . random_start . '~' . $mynum . '之间';

        } else {
            $GLOBALS['error_msg'] = '猜错了老弟!!数字在' . $mynum . '~' . random_end . '之间';

        }
        //$GLOBALS['error_msg'] = '猜错了老弟!!数字在' . random_start . '~' . $mynum . '之间';
    } else {
        $mylast = $_COOKIE['last_guess_num'];
        //正确的   我上次猜的， 现在猜的
        if ($mynum >= $mylast && $mylast > $random_num) {
            $GLOBALS['error_msg'] = '猜错了老弟A!!数字在' . random_start . '~' . $mylast . '之间';
        }
        //正确的    现在猜的  我上次猜的
        if ($random_num < $mynum && $mynum <= $mylast) {
            $GLOBALS['error_msg'] = '猜错了老弟B!!数字在' . random_start . '~' . $mynum . '之间';
        }
        //   我上次猜的，正确的  现在猜的
        if ($mylast < $random_num && $random_num < $mynum) {
            $GLOBALS['error_msg'] = '猜错了老弟C!!数字在' . $mylast . '~' . $mynum . '之间';
        }

        //  现在猜的 ，正确的  我上次猜的
        if ($mynum < $random_num && $random_num < $mylast) {
            $GLOBALS['error_msg'] = '猜错了老弟D!!数字在' . $mynum . '~' . $mylast . '之间';
        }
        //   我上次猜的， 现在猜的 ,正确的

        if ($mylast <= $mynum && $mynum < $random_num) {
            $GLOBALS['error_msg'] = '猜错了老弟E!!数字在' . $mynum . '~' . random_end . '之间';
        }

        //   ， 现在猜的  我上次猜的,正确的

        if ($mynum <= $mylast && $mylast < $random_num) {
            $GLOBALS['error_msg'] = '猜错了老弟F!!数字在' . $mylast . '~' . random_end . '之间';
        }

    }

    /* if ($mynum > $random_num) {
         //猜的数大于随机数
         if (!isset($_COOKIE['last_guess_num'])) {
             //第一次猜
             $GLOBALS['error_msg'] = '猜错了老弟!!数字在' . random_start . '~' . $mynum . '之间';
         } else {
             if ($mynum <= $_COOKIE['last_guess_num']) {
                 $GLOBALS['error_msg'] = '猜错了老弟!!数字在' . random_start . '~' . $mynum . '之间';

             } else {
                 $GLOBALS['error_msg'] = '猜错了老弟!!数字在' . random_start . '~' . $_COOKIE['last_guess_num'] . '之间';

             }

         }

     }*/

    $GLOBALS['guess_times']--;

    setcookie("last_guess_num", $mynum);
    setcookie("guess_times", $GLOBALS['guess_times']);


}


?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>猜数字游戏</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>


<div class="container container-fluid">
    <h1><?php echo '正确的数字:' . $random_num . '竞猜次数' . $GLOBALS['guess_times'] . '上次猜的数字' . $last_guess ?></h1>
</div>

<div class="alert <?php echo isset($error_msg) ? 'alert-danger' : 'alert-success' ?>" role="alert">
    <?php echo $error_msg ?>
</div>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="form-control">

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">请输入一个整数</span>
        </div>
        <input type="number" name="num" class="form-control" placeholder="0" aria-label="777"
               aria-describedby="basic-addon1">
    </div>


    <button class="btn btn-block btn-primary">确认</button>

</form>


</body>
</html>

