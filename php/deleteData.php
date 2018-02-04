<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/2/1
 * Time: 14:52
 */
require 'common.php';

$id=$_POST["id"];

$deleteData = mysqli_query($link,"delete from article where id='".$id."'");

$backinfo='';
if($deleteData){
    $backinfo = 1;
}else{
    $backinfo = 0;
}
echo json_encode($backinfo);

mysqli_close($link);
