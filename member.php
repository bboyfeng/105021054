<?php session_start();
include("dbConn.inc.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style type="text/css">
        body{
            background-image: url("ancrage.jpg");
            color: white;
            text-align: left;
            font-size: 20px;
    </style>
</head>
<body  >

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php


//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if($_SESSION['username'] != null)
{
    echo '<br><br>    ';
    echo '<a href="register.php">新增</a>    ';
    echo '<a href="update.php">修改</a>    ';
    echo '<a href="delete.php">刪除</a>  <br><br>';

    //將資料庫裡的所有會員資料顯示在畫面上
    $id = $_SESSION['username'];
    $sql = "SELECT * FROM `mysql` where `username`='$id'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array(MYSQLI_NUM);
    echo "帳號：$row[0] <br>";
    echo "密碼：$row[1]<br>";
    // echo "再一次輸入密碼：<input type=\"password\" name=\"pw2\" value=\"$row[2]\" /> <br>";
    echo "電話：$row[2] <br>";
    echo "地址：$row[3] <br>";
    echo "備註：$row[4] <br>";
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=log.php>';
}
echo '<a href="logout.php">登出</a>  <br><br>';
?>

</body>
</html>
