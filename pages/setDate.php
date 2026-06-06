<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>预约</title>
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
<?php session_start(); ?>

<div class="box">
    <h2>甜蜜约会</h2>
    <form method="post" action="controller/managesAppointCont.php">
        
        <div class="inputBox">
            <input type="text" name="day" required>
            <label>约会时间（YYYYMMDD）</label>
        </div>

        <div class="inputBox">
            <input type="text" name="place" required>
            <label>约会地点</label>
        </div>

        <button type="submit" class="btn btn1">提交预约</button>
        <button type="button" class="btn btn1" onclick="location.href='home.php'">返回</button>
    </form>
</div>
</body>
</html>