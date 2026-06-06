<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>个人信息</title>
    <link rel="stylesheet" href="../static/css/person.css">
    <link rel="stylesheet" href="../static/css/table.css">
</head>
<body>
    <div class="top">
        <div class="nav">
            <ul>
                <li><a href="person.php"><button class="btn btn3">个人信息</button></a></li>
                <li><a href="../changePerson.php"><button class="btn btn3">修改信息</button></a></li>
                <li><a href="../changePwd.php"><button class="btn btn3">修改密码</button></a></li>
                <li><a href="appointmentSelect.php"><button class="btn btn3">查看预约</button></a></li>
                <li><a href="../home.php"><button class="btn btn3">返回</button></a></li>
            </ul>
        </div>

        <a href="../controller/deleteSelf.php" 
           onclick="return confirm('确定注销账号吗？此操作不可恢复！')">
            <button style="background:#f30; color:#fff; padding:5px 10px; border:none; cursor:pointer;">注销账号</button>
        </a>
    </div>

    <div class="diary-container">
        <?php require '../controller/userSelectCont.php'; ?>
    </div>
</body>
</html>