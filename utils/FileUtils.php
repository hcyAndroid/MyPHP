<?php

//判断文件后缀名
function getFileType($source)
{
    if ($source['size'] >= 5 * 1024 * 1024) {
        $GLOBALS["error_msg"] = '文件超出1M';
        return;
    }
}