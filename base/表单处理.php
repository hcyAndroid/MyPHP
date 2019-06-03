<?php
var_dump($_POST);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>表单处理</title>
</head>
<body>
<form action="formresult.php" method="get">

    用户名 <input type="text" name="username"> <br>
    密码 &nbsp;<input type="password" name="password"> <br>
    <input type="submit" value="提交">
    <button>提交2</button>
</form>

<!--直线-->
<hr>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

    sex::
    <label for=""><input type="radio" name="sex" value="1">men</label>
    <label for=""><input type="radio" name="sex" value="2">women</label>
    <br>

    <label for=""><input type="checkbox" name="agre" value="1">agree</label>

    <hr>

    <label for=""><input type="checkbox" name="agre[]" value="1">agree1</label>
    <label for=""><input type="checkbox" name="agre[]" value="2">agree2</label>
    <label for=""><input type="checkbox" name="agre[]" value="3">agree3</label>

    <button>提交</button>

    <hr>


    <select name="selectTab">
        <option value="1" >1111</option>
        <option value="2" >222</option>
        <option value="3" >333</option>
    </select>

    <button>提交2</button>



</form>
</body>
</html>
