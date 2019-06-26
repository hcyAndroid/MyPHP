<?php
include_once '../utils/LogUtils.php';

//header('Set-Cookie:username=hcy');
//header('Set-Cookie:password=123');

//设置cookie 一天后到期
//setcookie('name','hcy',time()+1*24*60*60,'/','');

toast($_COOKIE);

$show = $_COOKIE['show'];


?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cookie</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style type="text/css">

        .show {
            width: 300px;
            height: 300px;
            background: #00f;
        }

        .hide {
            display: none;
        }

    </style>

    <script type="text/javascript">


    </script>

</head>
<body>
<a href="close.php" class="btn btn-primary" id="btn">点击7天消失广告</a>


<div class="<?php echo $show === '2' ? 'hide' : 'show' ?>">
    <h1>广告位</h1>
</div>


</body>
</html>
