<?php
session_start();
require_once('../model/user.php');

// 获取当前登录用户的ID
$uno = $_SESSION['uno'];

// 删除用户
$user = new user();
$user->deleteUser($uno);

// 销毁登录状态
session_destroy();

// 提示并跳回登录页
echo "<script>alert('账号注销成功！');location.href='../login.php';</script>";
?>