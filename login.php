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
</style></head>
<body>
<ul class='breadcrumb'>
<li><a href='main.php'>首頁</a></li>
<li><a href='search.php'>搜尋</a></li> 
<li><a href='newadd.php'>新增</a></li>
<li>
<?php
		  session_start();
		  if($_SESSION['name'] == null)
			  echo "會員登入";
		  else
		  {
			  echo "歡迎"."&nbsp".$_SESSION['name']."&nbsp"."你好";		  
			  echo "<li><a href='destroy.php'>登出</a></li>";
		  }
?>
</li>
</ul>
　  
<form method="POST" action="login.php"> <br>

<center>
WIKIA 會員登入 
<br>
帳號：<input type="text" name="id"> <br>
密碼：<input type="password" name="pwd"> <br>
<br>
<input type="submit" name="login" value="登入"> <br>
<hr>
還沒有帳號嗎？<input type="submit" name="regi" value="註冊">
<br><br>

</center>
</form>
<?php
session_start();
if(isset($_POST[regi]))
{
	header('Location: regi.php'); 
}
if(isset($_POST[backmain]))
{
	header('Location: main.php');
}
$db_ip="127.0.0.1";
$db_user="root";
$db_pwd="henry123";
$db_link= @mysqli_connect($db_ip, $db_user, $db_pwd,"wikia");
if(isset($_POST[login]))
{
if($_POST[id]!=null)
{
	if(isset($_POST[login]))
	{
		$sql= "SELECT * FROM `member` where id='$_POST[id]' and pwd='$_POST[pwd]'";
		mysqli_query($db_link, 'SET CHARACTER SET big 5');
		$result = mysqli_query($db_link, $sql);
		$row= $result->fetch_array(MYSQLI_ASSOC);
		if($row==null)
		{
			echo "<script>alert('帳密錯誤');</script>";
		}
		else
		{
			echo "<script>alert('登入成功');location.href='main.php';</script>";
			$_SESSION['id']=$_POST[id];
			$_SESSION['pwd']=$_POST[pwd];
			$_SESSION['name']=$row['name'];
		}
	}
}
else
	{
		 echo "<script>alert('請輸入帳密');</script>";	
	}

}
	mysqli_close($db_link);
?>