<head>
	<!-- Bootstrap core CSS -->
	  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	  <link href="css/modern-business.css" rel="stylesheet">

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
<form method="POST">
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
			  echo "<a href='login.php'>歡迎&nbsp$_SESSION[name]&nbsp你好</a>";				  
			  echo "<li><a href='destroy.php'>登出</a></li>";
		  }
?>
</ul>
<center>
新密碼：<input type="text" name="newpwd">
<br><br>
<input type="submit" name="change" value="送出"></center>
<?php
session_start();
$db_link= @mysqli_connect("127.0.0.1", "root", "henry123","wikia");

if(isset($_POST[change]))
{
$sql ="UPDATE `member` SET `pwd`='$_POST[newpwd]' WHERE name='$_SESSION[name]'";
mysqli_query($db_link, 'SET CHARACTER SET big 5');
$result = mysqli_query($db_link, $sql);

echo "<script>alert('更改成功');</script>";
}
?>
