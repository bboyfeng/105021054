2008/3/14 下午 08:47:13

<?php
//資料庫位置
$db_server = "localhost";
//資料庫名稱
$db_name = "105021054_";
//資料庫管理者帳號
$db_user = "105021054";
//資料庫管理者密碼
$db_password = "zxc870526";
$conn=new mysqli($db_server, $db_user, $db_password, $db_name);
//建立資料連接

$id = $_POST['id'];
$pw = $_POST['pw'];
if (!$conn) die("建立資料連接失敗");

//開啟資料表
$db_selected = mysqli_select_db("mysql", $link);
if (!$db_selected) die("開啟資料庫失敗");
$sql = "INSERT INTO mysql (username,password) VALUES ($id','$pw)";
if (!mysqli_query($sql))//***

//$result = mysql_query($sql,$link);
    die("執行 SQL 命令失敗");

mysqli_close($link);

?>