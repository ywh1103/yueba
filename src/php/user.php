
<?php
header('Content-type:text/html;charset=UTF-8');

$conn = new mysqli("localhost", "root", "", "women");
mysqli_query($conn, "set character set 'utf8'");
mysqli_query($conn, 'set names utf8');
$sql = "select * from data1";

$res = $conn->query($sql);

$arr=[];
/*while($row = mysqli_fetch_array($res)) {
    array_push($arr, $row);
}*/

/*echo json_encode($arr);*/
$i=0;
$num=35;
for($i;$i<$num;$i++){
    $row = mysqli_fetch_array($res);
    array_push($arr, $row);
}
echo json_encode($arr);

$conn->close();
?>