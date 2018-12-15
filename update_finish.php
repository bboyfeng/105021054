<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style type="text/css">
        body{
            background-image: url("ancrage.jpg");
            color: white;
            text-align: center;
            font-size: 20px;
    </style>
</head>
<body  >
<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("dbConn.inc.php");
//資料庫位置
$db_server = "localhost";
////資料庫名稱
$db_name = "105021054_";
////資料庫管理者帳號
$db_user = "105021054";
////資料庫管理者密碼
$db_password = "zxc870526";
$conn=new mysqli($db_server, $db_user, $db_password, $db_name);


$id = $_POST['id'];
$pw = $_POST['pw'];
//$pw2 = $_POST['pw2'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$other = $_POST['other'];
//紅色字體為判斷密碼是否填寫正確


    //更新資料庫資料語法
    $sql = "update mysql set password=$pw where username='$id'";


    if (mysqli_query($conn, $sql)) {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';

    } else {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';

    }



?>
</body>
</html>
