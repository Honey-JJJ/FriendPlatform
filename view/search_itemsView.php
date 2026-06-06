<?php

class SRV{

    function displaySearchUser($rows,$text1){

        foreach ($rows as $row){
            if (!$row) {
                echo 0;
            } else {
                if ($text1 != "" && $row['cname'] != null)
                    echo "<p style='font-size:24px; color:#f097b4; font-style:italic; font-family:Comic Sans MS, cursive; text-align:center;'>".$row['rname']. " 属于 " . $row['cname']. "</p>";
            }
        }
    }
}
?>