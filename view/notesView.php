<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>心动瞬间</title>
    <link rel="stylesheet" href="static/css/table.css"> <!-- 引入上面的样式 -->
</head>
<body>

<div class="diary-container">
    <div class="diary-header">
        PUPPYの心动瞬间
    </div>

    <?php 
    if (!isset($rows)) $rows = array();
    foreach ($rows as $row): ?>
    <div class="diary-item">
        <?php echo $row['content']; ?>
    </div>
    <?php endforeach; ?>
</div>

</body>
</html>