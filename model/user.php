<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
require_once ('DB.php');  
session_start();
class user
{
    var $db;
    var $link; 
    function __construct()
    {
		include "../static/connect.php";;
    }
 
    function login($uno,$password)
    {
        $user = $this->db->get_one("select * from user where uno=? and password =?",array($uno,$password));
        if($user)
        {
          
            $_SESSION['uno'] = $user['uno'];
            return true;
        }
        else
        {
            return false;
        }
    }
 
    function logout()
    {
       
        unset($_SESSION['uno']);
        session_destroy();
        return 1;
    }
	
  function add_user($uno,$password)
    {
        $bool = $this->db->get_col("select count(1) from user where uno=?",array($uno));
        if($bool)
        {
            return -1;
        }
        $result = $this->db->insert('user',array('uno'=>$uno,'password'=>$password));
        if($result)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
	 function cpwd($uno,$lpwd,$npwd)
    {
		
		$user = $this->db->get_one("select * from user where uno=? and password =?",array($uno,$lpwd));
        if($user)
        {
         $sql = "update user set password='$npwd' where uno='$uno'";
         $result = mysqli_query($this->link,$sql);
    
            if($result)
			return 1;
			else    
            return 0;
        }
        else
        {
            return -1;
        }
            
    }
	
	function cperson($uno,$id,$phone,$bdat){
	
         $sql = "update user set username='$id',phone='$phone',bdat='$bdat' where uno='$uno'";
          $result = mysqli_query($this->link,$sql);
    
            if($result)
			return 1;
			else    
            return 0;
	}
public function getUno($uno){
    $sql="select * from user where uno = $uno";
    $result=mysqli_query($this->link,$sql);

    $list = [];
    while($row = mysqli_fetch_assoc($result)){
        $list[] = $row;
    }
    return $list;
}
public function getAppointment($uno){
	$sql="select * from appointment where uno = $uno";
	$result = mysqli_query($this->link,$sql);
	$list = []; 
	while($row = mysqli_fetch_assoc($result)){
		$list[] = $row;
	}
	return $list; 
}

public function deleteUser($uno)
{
    $uno = mysqli_real_escape_string($this->link, $uno);
    $sql = "DELETE FROM user WHERE uno = '$uno'";
    return mysqli_query($this->link, $sql);
}




public function checkInf($uno){
   
	$sql="select * from user where uno = $uno";
	$result = mysqli_query($this->link,$sql);
	while($row = mysqli_fetch_array($result))
    {
	if($row['phone']==null||$row['addr']==null)
	   return 0;
	 else 
	   return 1;
    
    }
}
}

?>
</body>
</html>
