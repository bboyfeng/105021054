<body align="center">
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8  " />
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

$number=$_POST['number'];
$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$other = $_POST['other'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性



    //新增資料進資料庫語法

  $sql = "insert into mysql( username, password, telephone, address, other) values ('$id','$pw', '$telephone' , '$address', '$other')";


   if(mysqli_query($conn,$sql))
    {

        echo '註冊成功囉！';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=log.php>';
    }
   else
    {
        echo '註冊失敗喔！';
       // echo '<meta http-equiv=REFRESH CONTENT=2;url=log.php>';
    }

$conn->close();
?>
</body>
