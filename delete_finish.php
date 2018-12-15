<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include("user_check.inc.php");
//資料庫位置
$db_server = "localhost";
//資料庫名稱
$db_name = "105021054_";
//資料庫管理者帳號
$db_user = "105021054";
//資料庫管理者密碼
$db_password = "zxc870526";
$conn=new mysqli($db_server, $db_user, $db_password, $db_name);

$id = $_POST['id'];
if($_SESSION['username'] != null)
{
    //刪除資料庫資料語法
    $sql = "delete from mysql where username='$id'";
    if(mysqli_query($conn,$sql))
    {
        echo '刪除成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
    }
    else
    {
        echo '刪除失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=log.php>';
}
?>