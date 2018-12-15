<?php session_start();
include("dbConn.inc.php");
//include("user_check.inc.php");
?>
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

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if($_SESSION['username'] != null)
{
    //將$_SESSION['username']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    $id = $_SESSION['username'];
    //若以下$id直接用$_SESSION['username']將無法使用
    $sql = "SELECT * FROM `mysql` where `username`='$id'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array(MYSQLI_NUM);

    echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
    echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[0]\" readonly />(此項目無法修改) <br>";
    echo "新密碼：<input type=\"password\" name=\"pw\" value=\"$row[1]\" /> (輸入英文會失敗)<br>";

   // echo "再一次輸入密碼：<input type=\"password\" name=\"pw2\" value=\"$row[2]\" /> <br>";
    echo "電話：<input type=\"text\" name=\"telephone\" value=\"$row[2]\" /> <br>";
    echo "地址：<input type=\"text\" name=\"address\" value=\"$row[3]\" /> <br>";
    echo "備註：<textarea name=\"other\" cols=\"45\" rows=\"5\">$row[4]</textarea> <br>";
    echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";

}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=log.php>';
}
?>
</body>
</html>
