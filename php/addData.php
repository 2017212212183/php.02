<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/2/1
 * Time: 14:34
 */

require "common.php";

$title = $_POST["title"];
$label = $_POST["label"];
$content=$_POST["content"];
$author =$_POST["author"];

$addData = mysqli_query($link,"insert into article (title,label,content,author) values('".$title."','".$label."','".$content."','".$author."')");

$backinfo='';
if($addData){
    $backinfo = 1;
}else{
    $backinfo = 0;
}
echo json_encode($backinfo);

mysqli_close($link);

