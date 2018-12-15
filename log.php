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
<!-- 設定網頁編碼為UTF-8 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="check.php">
    帳號：<input type="text" name="id" /> <br>
    密碼：<input type="password" name="pw" /> <br>
    <input type="submit" name="button" value="登入" />&nbsp;&nbsp;
    <a href="register.php">申請帳號</a>
</form>
</body>
</html>