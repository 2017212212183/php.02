<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/2/1
 * Time: 14:57
 */
require 'common.php';
$title=$_POST["title"];
$id=$_POST["id"];

$selectData = mysqli_query($link,"select * from article where title like '%".$title."%' or id = '".$id."'");

$arr = array();
while ($row = mysqli_fetch_assoc($selectData)){
    $arr[] = $row;
}
echo json_encode($arr);

mysqli_close($link);
