<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/23 0023
 * Time: 9:57
 */

$conn = new mysqli("127.0.0.1", "root", "", "women");
mysqli_query($conn,"set character set 'utf8'");//读取数据时设置字符集编码utf-8
mysqli_query($conn,'set names utf8');//写入数据时设置字符集编码为utf-8


?>