<?php
header("Content-type:text/html;charset=utf-8");
require 'common.php';

$backinfo = '';
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]); // 将文件名打散为数组，以‘.’为分隔符

$extension = end($temp);     // 获取文件后缀名
if ((($_FILES["file"]["type"] == "image/gif") //判断文件的格式
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
        || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 204800)   // 小于 200 kb
    && in_array($extension, $allowedExts)) //在$allowedExts中查找是否含有上传文件的后缀名$extension
{
    if ($_FILES["file"]["error"] > 0)  //$_FILES["file"]["error"]>0:有错
    {
        $backinfo = "错误：: " . $_FILES["file"]["error"] . "<br>";
    } else{
            // 如果没有 upfiles 目录，你需要创建它，upfiles 目录权限为 777
            $dir = iconv("UTF-8", "GBK", "../upfiles");
            if (!file_exists($dir)){
                mkdir ($dir,0777,true);
            }
        // 判断当期目录下的 upfiles 目录是否存在该文件
        if (file_exists("../upfiles/" . $_FILES["file"]["name"]))
        {
            $backinfo = $_FILES["file"]["name"] . " 文件已经存在。 ";
        }
        else
        {
            // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
            move_uploaded_file($_FILES["file"]["tmp_name"], "../upfiles/" . $_FILES["file"]["name"]);
//            $backinfo = $_FILES["file"]["name"] ."文件已上传";
            $backinfo = "../php.02/upfiles/".$_FILES["file"]["name"];
            $imagesPath = mysqli_query($link,"insert into images (path , title ) VALUES ('../php.02/upfiles/".$_FILES["file"]["name"]."','".$_FILES["file"]["name"]."')");
        }
    }
}
else
{
    $backinfo = "非法的文件格式";
}
echo sprintf($backinfo);
