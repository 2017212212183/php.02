<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/2/1
 * Time: 14:14
 */

require "common.php";


$getData = mysqli_query($link,"select * from images");
$arr = array();
while ($row = mysqli_fetch_assoc($getData)){
    $arr[] = $row;
};
echo json_encode($arr);


mysqli_close($link);

