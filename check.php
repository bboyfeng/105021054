<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style type="text/css">
        body{
            background-image: url("ancrage.jpg");
            color: white;
            text-align: center;
           font-size: 50px;
            </style>
</head>
<body  >
<?php session_start(); ?>
    <!--上方語法為啟用session，此語法要放在網頁最前方-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("dbConn.inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
//搜尋資料庫資料
$sql = "SELECT * FROM mysql WHERE  username = '$id'";
$result = $mysqli->query($sql);
$row = $result->fetch_array(MYSQLI_NUM);
//$result = mysqli_query($sql);
//$row = @mysqli_fetch_array($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
//echo "id=$id pw= $pw   username from DB=  $row[3]  password from db = $row[2]";
if($id != null && $pw != null && $row[0] == $id && $row[1] == $pw)

{
    //將帳號寫入session，方便驗證使用者身份

    $_SESSION['username'] = $id;
    echo '登入成功!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=first.html>';
}
else
{

    echo '登入失敗!廢物！';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=log.php>';
}
?>

</body>
</html>