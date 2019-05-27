<table border="1">

    <?php $filepath = "testfile.text";
    //读文件
    if (file_exists($filepath)):
        $file = fopen($filepath, 'r');
        $arr = array();
        while (!feof($file)):
            $arr[] = fgets($file); ?>
        <?php endwhile; ?>
        <?php foreach ($arr as $key => $value): ?>
        <tr>
            <?php $tdd = explode('|', $value) ?>
            <?php foreach ($tdd as $keys => $values): ?>
                <td><?php
                    if ($keys == count($tdd) - 1):

                        $url= trim($values).".com";

                        echo "<a href='$url'>".strtoupper($url)."</a>";

                    else:
                        echo $values;
                    endif;

                    ?></td>

            <?php endforeach; ?>
        </tr>
    <?php endforeach; else: ?>
        "文件不存在"
    <?php endif; ?>

</table>


<?php
header("Content-type:text/html;charset=utf-8");
ini_set('display_errors', '1');
ini_set('error_reporting', E_ALL);
