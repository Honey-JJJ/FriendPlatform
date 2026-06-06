<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>

<?php
session_start();
require_once ('../model/user.php');

if (!isset($_SESSION['uno'])) {
    echo "<p>你还没有登录!</p>";
    echo "<script>alert('你还没有登录！');window.location.href='../login.php';</script>";
} else {
    $uno = $_SESSION['uno'];
    $user = new user();
    $result = $user->getUno($uno);

    if (!empty($result)) {
        echo "<table>";
        echo "<tr><th>用户编号</th><th>昵称</th><th>手机号</th><th>生日</th></tr>";
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>".$row['uno']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['bdat']."</td>"; 
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<div class='diary-container'><p>暂无个人信息~</p></div>";
    }
}
?>
</body>
</html>
