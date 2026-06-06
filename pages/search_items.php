<style>
.sent {
	font-size: 20px;
	font-family: 'LiSu';
}
.search-result {
    font-size: 24px !important;
    color: #f097b4 !important;
    font-style: italic !important;
    font-family: Comic Sans MS, cursive !important;
    margin: 8px 0 !important;
    text-align: center !important;
}
</style>
<?php

if (isset($_GET['Search']))
{
require_once 'controller/search_itemscontroller.php';
$text1 = $_GET['text'];
$show = new searchcontrol();
$show->showsearchcontrol($text1);
}

else {
?>
    <br /><center><p class='sent'>
<?php
	 echo "<center>";
    echo "<p style='font-size:24px; color:#f097b4; font-style:italic; font-family:Comic Sans MS, cursive; margin:8px 0;'>Love has its own destiny</p>";
    echo "<p style='font-size:24px; color:#f097b4; font-style:italic; font-family:Comic Sans MS, cursive; margin:8px 0;'>My relationship with you is the best in the world</p>";
    echo "</center>";
}

?>