<!DOCTYPE HTML>
<head>
	<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<style>
	span{font-size:20px;}
</style>
</head>

<body>　
<ul class='breadcrumb'>
<li><a href='main.php'>首頁</a></li>
<li><a href='search.php'>搜尋</a></li> 
<li><a href='newadd.php'>新增</a></li>
<li>
<?php
		  session_start();
		  if($_SESSION['name'] == null)
			  echo "<a href='login.php'>會員登入</a>";
		  else
		  {
			  echo "歡迎"."&nbsp".$_SESSION['name']."&nbsp"."你好";		  
			  echo "<li><a href='destroy.php'>登出</a></li>";
		  }
?>
</li>
</ul>
<center>
<form method="POST" action="regi.php"> <br>
<font size="6" face="DFKai-sb">註冊帳號 </font> <br>
名稱：<input type="text" name="rname">  <br> <br>

帳號：<input type="text" name="rid">  <br>	<br>

密碼：<input type="password" name="rpwd">  <br> <br>



<input type="submit" name="send" value="註冊">
</center>
<hr>
</form>
<?php

$db_ip="127.0.0.1";
$db_user="root";
$db_pwd="henry123";
$db_link= @mysqli_connect($db_ip, $db_user, $db_pwd,"wikia");

if(isset($_POST['send']))
{
	$sql= "SELECT * FROM `member` where name='$_POST[rname]'";
	mysqli_query($db_link, 'SET CHARACTER SET big 5');
	$result = mysqli_query($db_link, $sql);
	$row= $result->fetch_array(MYSQLI_ASSOC);
	if($row != null)
	{
		echo "名稱已經有人使用";
	}
	else
	{
		$sql= "SELECT * FROM `member` where id='$_POST[rid]'";
		mysqli_query($db_link, 'SET CHARACTER SET big 5');
		$result = mysqli_query($db_link, $sql);
		$row= $result->fetch_array(MYSQLI_ASSOC);
		if($row == null)
		{
			$query="SELECT autonum FROM `member` order by autonum DESC";
		$result= mysqli_query($db_link,$query);
		$auto=$result->fetch_array(MYSQLI_ASSOC);
		$autonum=$auto['autonum']+1;
		
		$sql="INSERT INTO `member`(`autonum`, `name`, `id`, `pwd`) VALUES ('$autonum','$_POST[rname]','$_POST[rid]','$_POST[rpwd]')";
		mysqli_query($db_link, 'SET CHARACTER SET big 5');
		$result=mysqli_query($db_link, $sql);
		echo "<script>alert('註冊成功 請再次登入');location.href='login.php';</script>";
		}
		else
		{	
		echo "帳號已經有人使用";
		}
	}
}

	mysqli_close($db_link);
?>
