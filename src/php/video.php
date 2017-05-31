<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/23 0023
 * Time: 16:44
 */
header("Content-type:text/html;charset=utf-8");
$sqlconn = new mysqli("127.0.0.1", "root", "", "women");
mysqli_query($sqlconn, "set character set 'utf8'");
mysqli_query($sqlconn, 'set names utf8');
$i=1;
$num=42;

$obj=json_decode($_POST["shu"],true);


for ($i;$i<$num;$i++){
    $title = $obj[$i]["title"];

    $img = $obj[$i]["img"];

    $vide = $obj[$i]["video"];

    $insert_order_sql="INSERT INTO video (title,img,video) VALUES (?,?,?)";
    $result=$sqlconn->prepare($insert_order_sql);
    $result->bind_param("sss",$title,$img,$vide);
    $result->execute();
}
?>