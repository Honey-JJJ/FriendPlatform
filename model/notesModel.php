<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>心动瞬间模型</title>
</head>

<body>
<?php
require_once ('DB.php');  
session_start();
class Knowledge
{
    var $db;
 
    function __construct()
    {
        require_once "./static/connect.php";
    }
 
    function getAllKnowledge()
    {
        $rows = $this->db->get_all("select * from notes ");
        return $rows;
    }
}
?>
</body>
</html>
