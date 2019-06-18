<?php

/**
 * @param $fileSource 文件域数组
 * @param $allowType  文件允许的类型数组
 * @param $targetPath 移动到的目录
 * @return string|void
 */
function upload_files($fileSource, $allowType, $targetPath)
{
    if (empty($fileSource)) {
        //没检测到上传的文件
        return;
    }
    //TODO:判断文件是否上传到虚拟路径成功
    if ($fileSource['error'] !== UPLOAD_ERR_OK) {
        //文件是上传到虚拟路径失败
        return;
    }
    //TODO:判断上传的文件是否是想要的类型
    if (!in_array($fileSource['type'], $allowType)) {
        //不是我们想要的类型
        return;
    }
    //TODO:判断文件大小是否合理.....
    //TODO:......................
    $target = $targetPath . '/' . uniqid() . '-' . $fileSource['name'];
    if (!move_uploaded_file($fileSource['tmp_name'], $target)) {
        //没上传到指定路径成功
        return;
    }

    return $target;

}