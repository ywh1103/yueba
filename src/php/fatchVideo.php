<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/23 0023
 * Time: 17:40
 */
header('Content-type:text/html;charset=UTF-8');

$conn = new mysqli("localhost", "root", "", "women");
mysqli_query($conn, "set character set 'utf8'");
mysqli_query($conn, 'set names utf8');
$sql = "select * from video";

$res = $conn->query($sql);

$arr=[];
/*while($row = mysqli_fetch_array($res)) {
    array_push($arr, $row);
}*/

/*echo json_encode($arr);*/
$i=1;
$num=42;
for($i;$i<$num;$i++){
    $row = mysqli_fetch_array($res);
    array_push($arr, $row);
}
echo json_encode($arr);

$conn->close();

?>