<?php 
    header("location:chatroom.html");
    require_once("connect.php");
    session_start();
    $username=$_SESSION['username'];
	
	
	
    $text=$_GET['text'];
	
	if($username==NULL||$text==NULL)
	{
		
		exit;
		
	}
	
    $filename="chat.txt";
    $fp=fopen($filename,'a');
    if(!$fp)
    {
        echo "FAIL!";
    }
    $outputstring=sprintf("\r\s%s(%s)\r\n%s\r\n",$username,date("h:i:sa"),$text);
    fwrite($fp,$outputstring);
    fclose($fp);
	
?>
