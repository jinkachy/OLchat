<?php 
    require_once('connect.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(!$username || !$password)
    {
        echo "USERNAME OR PASSWORD CANNOT BE EMPTY!";
        exit;
    }
    $sql="SELECT * FROM userss WHERE username='$username'";
    $result=mysql_query($sql);
    if(mysql_num_rows($result))
    {
        echo "USERNAME EXISTS!";
        exit;
    }
    $sql="INSERT userss(username,password) VALUES ('$username','$password')";
    mysql_query($sql);
    header("location:index.html");
?>