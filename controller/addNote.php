<?php
// 错误提示
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 连接数据库
include '../static/config.inc.php';

// 提交
if ($_POST['content']) {
    $content = $_POST['content'];


    $sql = "INSERT INTO notes (content) VALUES ('$content')";

    if ($conn->query($sql)) {
        echo "<script>alert('添加成功！');location.href='../notes.php';</script>";
    } else {
        echo "<script>alert('添加失败：".$conn->error."');history.back();</script>";
    }
    exit;
}


header("Location: ../notes.php");
?>