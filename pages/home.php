<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Construction</title>
    <link href="static/css/construction.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .navigation a,
        .img a {
            text-decoration: none;
        }
        .style1 {color: #FFFFFF}
    </style>
    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>

</head>

<body>

<div id="container">

<!--    <div class="navigation">-->
<!--        <ul>-->
<!--            <li><a href="home.php">首页</a></li>-->
<!--            <li><a href="notes.php">知识课堂</a></li>-->
<!--            <li><a href="single.php?page=1">趣味问答</a></li>-->
<!--            <li><a href="#">甜蜜约会</a></li>-->
<!--        </ul>-->
<!--    </div>-->
    <?php
    require_once ('header.php');
    ?>
    <div class="searcbar">
        <label></label>
        <form action="" method="get">
            <input name="text" type="text" class="text" id="password" autocomplete="off" />

            <label>
                <input type="submit" name="Search" id="Search" value="Search" />
            </label>

        </form>
    </div>
    <div class="topbar">

        <div style="width:760px; ">
            <div  style="height:140px; border-style: solid; border-width: 1px; padding: 5px; border-color: #CCCCCC; background-color: #FFFFFF;">
                <?php
                require_once ('search_items.php');
                ?>

            </div >
        </div>
    </div>

    <div id="contentarea">
        <div class="rightcolumn">

            <div class="column1">
                <div class="titlebar">
                    <h1>大厅</h1>
                </div>
                <div class="content-inner" >
                    <div class="leftbar1">
                        <span class="boxtitle">Cherished</span><br />
                        我喜欢被你放在心上的感觉，喜欢被你认真对待的每一刻。你记得我随口提过的偏爱，留意我不经意流露的情绪，懂得我藏在沉默里的温柔。这些被用心珍藏的细节，是平淡日子里里最安稳的暖意，也是我愿意一直奔赴你的理由<br class="clearboth" />
                    </div>
                    <div class="leftbar1">
                        <span class="boxtitle">Disliked</span><br />
                        讨厌你从不肯用心记住我的喜好，忽略我的情绪、敷衍我的真心。那些漫不经心的冷淡、视而不见的沉默、理所当然的消耗，像细针慢慢扎进心里。原来最伤人的不是争吵，而是你明明在我身边，却从未真正在意过我 <br class="clearboth" />
                    </div>
                    <div class="leftbar2">
                        <span class="boxtitle">避雷清单</span><br />
                        恋爱里的小雷区，一定要提前避开！冷暴力和敷衍会慢慢磨掉爱意，不被重视的喜欢和新鲜感，不如不要。双向奔赴的爱，从来都不是一个人的独角戏～<br class="clearboth" />
                    </div>
                    <div class="leftbar2">
                        <span class="boxtitle">惊喜</span><br />
                        是偷偷准备的小礼物，是突然出现在楼下的你，是藏在细节里的偏爱。恋爱里的惊喜，不是惊天动地，而是每一次 “我都记得” 的用心<br class="clearboth" />
                    </div>
                </div>
                <div class="content-inner" style="display: none;">
                    <?php

                    include ('static/config.inc.php');

                    $sql = "SELECT * FROM items,category where items.cno = category.cno and cname = 'Cherished'";
                    $rowsult = $conn->query($sql);

                    $i = 1;
                    if ($rowsult->num_rows > 0) {

                        while ($row = $rowsult->fetch_assoc()) {

                            if($i % 2 != 0){

                                echo  "<div class=\"leftbar1\">";
                                echo "<p>",$row['rname'],"    ",$row['rintro'],"</p>";
                                echo "</div>";
                            }
                            else{
                                echo  "<div class=\"leftbar2\">";
                                echo "<p>",$row['rname'],"    ",$row['rintro'],"</p>";
                                echo "</div>";
                            }
                            $i = $i+1;

                        }
//                            echo "\n</TABLE>";
                    } else {
                        echo "0 结果";
                    }
                    // 释放结果集
                    mysqli_free_result($rowsult);

                    $conn->close();
                    ?>
                </div>
                <div class="content-inner" style="display: none;">
                    <?php
                    include ('static/config.inc.php');
                    //                    $sort = 'Cherished';
                    $sql = "SELECT * FROM items,category where items.cno = category.cno and cname = 'Disliked'";
                    $rowsult = $conn->query($sql);

                    $i = 1;
                    if ($rowsult->num_rows > 0) {

                        while ($row = $rowsult->fetch_assoc()) {

                            if($i % 2 != 0){

                                echo  "<div class=\"leftbar1\">";
                                echo "<p>",$row['rname'],"    ",$row['rintro'],"</p>";
                                echo "</div>";
                            }
                            else{
                                echo  "<div class=\"leftbar2\">";
                                echo "<p>",$row['rname'],"    ",$row['rintro'],"</p>";
                                echo "</div>";
                            }
                            $i = $i+1;

                        }
//                            echo "\n</TABLE>";
                    } else {
                        echo "0 结果";
                    }
                    // 释放结果集
                    mysqli_free_result($rowsult);

                    $conn->close();


                    ?>
                </div>
                <div class="content-inner" style="display: none;">
                    <?php

                    include ('static/config.inc.php');
                    //                    $sort = 'Cherished';
                    $sql = "SELECT * FROM items,category where items.cno = category.cno and cname = '避雷清单'";
                    $rowsult = $conn->query($sql);

                    $i = 1;
                    if ($rowsult->num_rows > 0) {

                        while ($row = $rowsult->fetch_assoc()) {

                            if($i % 2 != 0){

                                echo  "<div class=\"leftbar1\">";
                                echo "<p>",$row['rname'],"    ",$row['rintro'],"</p>";
                                echo "</div>";
                            }
                            else{
                                echo  "<div class=\"leftbar2\">";
                                echo "<p>",$row['rname'],"    ",$row['rintro'],"</p>";
                                echo "</div>";
                            }
                            $i = $i+1;

                        }
//                            echo "\n</TABLE>";
                    } else {
                        echo "0 结果";
                    }
                    // 释放结果集
                    mysqli_free_result($rowsult);

                    $conn->close();
                    ?>
                </div>
                <div class="content-inner" style="display: none;">
                    <?php

                    include ('static/config.inc.php');
                    //                    $sort = 'Cherished';
                    $sql = "SELECT * FROM items,category where items.cno = category.cno and cname = '惊喜'";
                    $rowsult = $conn->query($sql);

                    $i = 1;
                    if ($rowsult->num_rows > 0) {

                        while ($row = $rowsult->fetch_assoc()) {

                            if($i % 2 != 0){

                                echo  "<div class=\"leftbar1\">";
                                echo "<p>",$row['rname'],"    ",$row['rintro'],"</p>";
                                echo "</div>";
                            }
                            else{
                                echo  "<div class=\"leftbar2\">";
                                echo "<p>",$row['rname'],"    ",$row['rintro'],"</p>";
                                echo "</div>";
                            }
                            $i = $i+1;

                        }
//                            echo "\n</TABLE>";
                    } else {
                        echo "0 结果";
                    }
                    // 释放结果集
                    mysqli_free_result($rowsult);

                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
        <div class="leftcolumn">
            <div class="column2">
                <div class="titlebar">
                    <h1>恋爱小tips</h1>
                </div>

                <li class="leftbar1">
                    <br/>
                    <span class="boxtitle">Cherished</span><br/>
                    <br class="clearboth" />
                </li>
                <li class="leftbar2">
                    <br/>
                    <span class="boxtitle">Disliked</span><br/>
                    <br class="clearboth" />

                </li>
                <li class="leftbar1">
                    <br/>
                    <span class="boxtitle">避雷清单</span><br/>
                    <br class="clearboth" />
                </li>
                <li class="leftbar2">
                    <br/>
                    <span class="boxtitle">惊喜</span><br/>
                    <br class="clearboth" />
                </li>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>

            </div>
            <script>
                $(function(){
                    //获取点击事件的对象
                    $(".column2 li").click(function(){
                        //获取要显示或隐藏的对象
                        var divShow = $(".column1").children('.content-inner');
                        //判断当前对象是否被选中，如果没选中的话进入if循环
                        if (!$(this).hasClass('selected')) {
                            //获取当前对象的索引
                            var index = $(this).index();
                            //当前对象添加选中样式并且其同胞移除选中样式；
                            $(this).addClass('selected').siblings('li').removeClass('selected');
                            //索引对应的div块显示
                            $(divShow[index]).show();
                            //索引对应的div块的同胞隐藏
                            $(divShow[index]).siblings('.content-inner').hide();
                        }
                    });
                });

            </script>

        </div>
    </div>
</div>

</div>
<br class="clearboth" />

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<div class="footer">
    <p class="style1">2023122103335 计科2班 JGM</p>
</div>
<!--</form>-->
</body>
</html>

