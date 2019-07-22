<?php
//TODO:从数据库中读取数据，并用模板展示
include_once '../../utils/LogUtils.php';
$connection = mysqli_connect('127.0.0.1', 'root', '12345678', 'stus');
toast($connection);
if (!$connection) {
    echo '连接失败';
    return;
}
$query = mysqli_query($connection, 'select * from stud');
toast($query);
if (!$query) {
    exit('数据库操作失败');
}
$arr = [];
while ($row = mysqli_fetch_assoc($query)) {
    $arr[] = $row;
}
toast($arr);

mysqli_free_result($query);

mysqli_close($connection);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>定时删除</title>
    <script src="../../utils/JSUtils.js"></script>
    <script src="../../template/template-web.js"></script>
    <style>
        table {
            width: 300px;
            height: 200px;
            border: 1px #005cbf;
        }
    </style>
</head>
<body>
<div>
    <?php echo count($arr); ?>
</div>
<table id="tb" border="1" width="100">

</table>

<script id="tab" type="text/x-art-template">
    <thead>
    <tr>
        {{each result[0]}}
        <td>{{$index}}</td>
        {{/each}}
        <td>操作</td>
    </tr>
    </thead>
    <tbody>
    {{each result}}
    <tr>
        {{each result[$index]}}
        <td>
            {{$value}}
        </td>
        {{/each}}
        <td><input type="button" id="delete" value="删除"></td>
    </tr>
    {{/each}}
    </tbody>
</script>

<script>
    var tb = my$('tb');
    var arrstr = '<?php echo json_encode($arr)?>';
    var data = {result: JSON.parse(arrstr)};
    var html = template('tab', data);
    tb.innerHTML = html;
    var tbody = getLastElement(tb);

    //console.log(tbody)



    for (let i = 0; i < tbody.children.length; i++) {
        let tr = tbody.children[i];
        console.dir(tr);

        let td = getLastElement(tr);

        console.log(getFirstElement(td))

        td.addEventListener('click', function () {
            setTimeout(function () {
                getLastElement(tb).removeChild(tr);
            },3*1000);

        });
    }


    //console.log( getFirstElement(getLastElement(getFirstElement(tbody))))

    /*  getFirstElement(getLastElement(getFirstElement(tbody)))*/

    // console.log(html);
</script>

</body>
</html>






