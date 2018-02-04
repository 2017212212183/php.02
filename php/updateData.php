<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/2/1
 * Time: 14:44
 */
require "common.php";

$id = $_POST["id"];
$title = $_POST["title"];
$label = $_POST["label"];
$content=$_POST["content"];
$author =$_POST["author"];

$updData = mysqli_query($link,"update article set title='".$title."',label='".$label."',content='".$content."',author='".$author."' where id='".$id."'");

$backinfo='';
if($updData){
    $backinfo = 1;
}else{
    $backinfo = 0;
}
echo json_encode($backinfo);


mysqli_close($link);

