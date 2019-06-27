<?php
//header('Content-Type:application/json');
//
//
//$data=array('name'=>'hcy','age'=>13,'sex'=>'男');
//
//
//echo json_encode($data);?>



<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script>
    var xhr=new XMLHttpRequest();


    xhr.open('get','./test.xml');

    xhr.send(null);

    xhr.onreadystatechange=function () {
        if (xhr.readyState!==4){
            return;
        }

        console.log(xhr.responseText);

        var xmlDom=xhr.responseXML;

        console.log(xmlDom.documentElement.children[0].innerHTML);//拿到name节点
    }
</script>

</body>
</html>



