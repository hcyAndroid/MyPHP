<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>点击按钮显示与掩藏</title>
    <style type="text/css">
        .show {
            width: 300px;
            height: 300px;
            background-color: red;
            /*display: block;*/
            display: block;

        }

        .hidden{
            /*width: 300px;*/
            /*height: 300px;*/
            /*background-color: red;*/
            display: none;
        }

    </style>
</head>
<body>

<button id="btn">影藏</button>

<div id="tag" class="hidden"></div>


<script>

    var btn = document.getElementById('btn');


    btn.onclick=function () {
        let divs = document.getElementById("tag");
         console.log(divs.className)
        // if (div.className=="show"){
        //     btn.innerText="显示"
        //     div.className="hidden";
        // } else {
        //     btn.innerText="影藏"
        //     div.className=="show"
        // }

        btn.innerText="影藏"
        divs.className=="show"
    }
</script>

</body>
</html>


<?php
$List = array();

echo '../file/5d089c5a85254-家长头像.png'; ?>
