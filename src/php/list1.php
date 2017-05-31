<?php

	header("Content-type:text/html;charset=utf-8");
	$sqlconn = new mysqli("127.0.0.1", "root", "", "women");
    mysqli_query($sqlconn, "set character set 'utf8'");
    mysqli_query($sqlconn, 'set names utf8');

    $i=0;
    $num=36;
    
    $obj=json_decode($_POST["shu"],true);

    for ($i;$i<$num;$i++)
	{

		$imgsrc = $obj[$i]["id"];
        echo $imgsrc;
		$title = $obj[$i]["name"];

		$position1 = $obj[$i]["intro"];

		$position2 = implode(',',$obj[$i]["txt"]);

		$position3 = implode(',',$obj[$i]["img"]);

		$insert_order_sql="INSERT INTO data1 (my_id,name,intro,txt,img) VALUES (?,?,?,?,?)";
		$result=$sqlconn->prepare($insert_order_sql);
		$result->bind_param("sssss",$imgsrc,$title,$position1,$position2,$position3);
		$result->execute();
	}

?>