<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="static/css/bar.css" rel="stylesheet" type="text/css" />
    <link href="static/css/construction.css" rel="stylesheet" type="text/css" />
<title>专题学习模型</title>
</head>

<body>
<?php
require_once ('DB.php'); 
class Topic
{
    var $db;
 
    function __construct()
    {
        require_once "./static/connect.php";
    }
 
    function getAllTopic()
    {
        $rows = $this->db->get_all("select tname from topic group by tname");
        return $rows;
    }
	
	function getTopicItems($topic)
    {
        $rows = $this->db->get_all("select rname,category.cname,rintro from topic,items,category where tname=? and topic.rno=items.rno and items.cno=category.cno", array($topic));
        return $rows;
    }
}

?>
</body>
</html>
