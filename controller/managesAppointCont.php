<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
session_start();
require_once ('../model/appointment.php');  

$uno   = $_SESSION['uno'];
$place = $_POST['place'];
$day   = $_POST['day'];

$app = new appointment();
$result = $app->addAppointment($uno, $place, $day);

if($result){
    echo "<script>alert('预约成功！');location.href='../home.php';</script>";
}else{

    echo "失败原因：";
    print_r($app->link->error);
    exit;
}
?>
</body>
</html>