<?php

    header("Content-type:text/html;charset=utf-8");
    $sqlconn = new mysqli("127.0.0.1", "root", "", "women");
    mysqli_query($sqlconn, "set character set 'utf8'");
    mysqli_query($sqlconn, 'set names utf8');



    $res = $sqlconn->query("select * from data1 where my_id='".$_POST["id"]."'");

    $row = mysqli_fetch_array($res);
    echo json_encode($row);


    $res->close();
    $sqlconn->close();



?>