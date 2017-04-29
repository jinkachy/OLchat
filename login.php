<?php 
    require_once('connect.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from userss where username='$username' and password='$password'";
    $result=mysql_query($sql);
    session_start();
    $_SESSION['username']=$username;
	
$sql2="select vip from userss where username='$username' and password='$password'";
$res=mysql_query($sql2);
while($row=mysql_fetch_assoc($res)){
$rows[]=$row;}
	

    if(!mysql_num_rows($result))
    {
        echo "WRONG USERNAME OR PASSWORD!";
        exit;
    }
	 header("location:chatroom.html");
?>