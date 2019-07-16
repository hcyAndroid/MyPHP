<?php
include_once '../utils/LogUtils.php';
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    toast("***********");
    $img_src = '../file/5d089c5a851d1-家长订阅.png';
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>点击切换图片</title>
</head>
<body>
<button id="btn">点击随机切换图片</button>
<br>
<img id="img" src="<?php echo $img_src ?>" alt="网络图片">


<script>
    var btn = document.getElementById('btn');
    var img = document.getElementById("img");
    btn.onclick = function () {
        console.log("===按钮点击了===");
        var xhr = new XMLHttpRequest();
        xhr.open('get', './getPic.php');

        xhr.send();
        xhr.onreadystatechange = function () {
            if (this.readyState != 4) {
                return;
            }
            console.log(this.responseText);
            img.src = this.responseText;
        }
    }
</script>


</body>
</html>

