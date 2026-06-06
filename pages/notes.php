<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.navigation a,
.img a {
    text-decoration: none;
}

/* 右下角按钮 */
.fixed-add-btn {
    position: fixed;
    bottom: 30px;
    right: 30px;
    background-color: #ea9cb6;
    color: #fff;
    border: none;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    font-size: 24px;
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    z-index: 999;
}

/* 弹窗*/
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 1000;
}

.modal-content {
    background: white;
    width: 450px;
    margin: 150px auto;
    padding: 25px;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
}

.modal-textarea {
    flex: 1;
    width: 100%;
    height: 200px;
    padding: 12px;
    font-size: 14px;
    border: 1px solid #ddd;
    border-radius: 6px;
    resize: none;
    box-sizing: border-box;
}
.modal-btn {
    margin-top: 15px;
    text-align: right;
}
.modal-btn button {
    padding: 6px 14px;
    margin-left: 8px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.btn-submit {
    background: #ea9cb6;
    color: white;
}
.btn-cancel {
    background: #bbbaba;
    color: white;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="static/css/bar.css" rel="stylesheet" type="text/css" />
<link href="static/css/table.css" rel="stylesheet" type="text/css" />
<title>心动瞬间</title>
</head>

<body>
<?php
include "header.php";
?>

<div class="bar">
  <ul>
    <li><a href="notes.php">心动瞬间</a></li>
    <li><a href="topic.php">专题学习</a></li>
  </ul>
</div>

<?php
require 'controller/notesCont.php';
$show=new Control();
echo "<center>";
$show->showcontrol();
echo "</center>";
?>

<!-- 右下角按钮 -->
<button class="fixed-add-btn" id="openModal">+</button>

<!-- 弹窗 -->
<div class="modal" id="noteModal">
    <div class="modal-content">
        <h3><center>添加心动瞬间</center></h3>

        <form action="controller/addNote.php" method="post">
            <textarea name="content" class="modal-textarea" placeholder="写下你的心动瞬间..." required></textarea>
            <div class="modal-btn">
                <button type="button" id="closeModal" class="btn-cancel">cancel</button>
                <button type="submit" class="btn-submit">submit</button>
            </div>
        </form>
    </div>
</div>

<script>
// 弹窗控制
const openBtn = document.getElementById('openModal');
const closeBtn = document.getElementById('closeModal');
const modal = document.getElementById('noteModal');

openBtn.onclick = function(){
    modal.style.display = 'block';
}
closeBtn.onclick = function(){
    modal.style.display = 'none';
}
window.onclick = function(e){
    if(e.target == modal){
        modal.style.display = 'none';
    }
}
</script>

</body>
</html>