
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//資料庫設定
//資料庫位置
$db_server = "localhost";
//資料庫名稱
$db_name = "105021054_";
//資料庫管理者帳號
$db_user = "105021054";
//資料庫管理者密碼
$db_passwd = "zxc870526";
//對資料庫連線
$mysqli=new mysqli($db_server, $db_user, $db_passwd, $db_name);
//$con = mysqli_connect("localhost","105021054","zxc870526","my_db");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}



//
//if(!mysqli_connect_errno())
//    die("無法對資料庫連線");

//資料庫連線採UTF8
//mysqli_query("SET NAMES utf8");

//選擇資料庫

?>