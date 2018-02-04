<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/2/1
 * Time: 14:14
 */
header("Content-type:text/html; charset=utf-8");
$link = mysqli_connect(
    "localhost",
    "root",
    "",
    "test"
);
if(!$link){
    printf("Can't Connect MYSQL server,err:",mysqli_connect_error());
    exit;
}
mysqli_query($link,"set names utf8");



