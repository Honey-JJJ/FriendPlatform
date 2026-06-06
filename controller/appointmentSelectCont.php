<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查看预约</title>
<link rel="stylesheet" href="./static/table.css">
</head>
<body>

<?php
session_start();
require_once ('../model/user.php'); 

if(!isset($_SESSION['uno'])) {
    echo "<p>你还没有登录!</p>";
    echo "<script>alert('你还没有登录！');window.location.href='../login.php';</script>";
} else { 
    $user = new user();
    $uno = $_SESSION['uno'];
    $result = $user->getAppointment($uno);

    if (!empty($result)) {
        echo "<table>";
        echo "<tr><th>用户号</th><th>日期</th><th>状态</th></tr>";
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>".$row['uno']."</td>";
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['status']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<div class='diary-container'><p>暂无预约记录~</p></div>";
    }
}
?>

</body>
</html>