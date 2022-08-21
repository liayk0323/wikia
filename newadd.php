<form action="newadd.php" method="POST" enctype="multipart/form-data">


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
<ul class='breadcrumb'>
<li><a href='main.php'>首頁</a></li>
<li><a href='search.php'>搜尋</a></li> 
<li class='active'>新增</li>
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


<div class="container">
<div class='col-lg-6 col-sm-6 portfolio-item'>
簡介：<input type="text" name="intro">  <br><br>
</div>
<div class='col-lg-6 col-sm-6 portfolio-item'>
圖片：<input type="file" name="file" id="file"><br>
<?php

?>
<br><br>
<br><br>
</div>

<div class='col-lg-12 col-sm-12 portfolio-item'>
主標題：<input type="text" name="title">  <br><br>
標題內文：<br><textarea rows=10 cols=50 name="content"></textarea>  <br><br>
</div>

<div class='col-lg-12 col-sm-12 portfolio-item'>
副標題：<input type="text" name="subtitle">  <br><br>
副標題內文：<br><textarea rows=10 cols=50 name="subcontent"></textarea>  <br><br>
</div>


<div class='col-lg-12 col-sm-6 portfolio-item'>
<input type="submit" name="send" value="送出">
</div>
</div>

<?php
session_start();
$db_link= @mysqli_connect("127.0.0.1", "root", "henry123","wikia") or die ('資料庫錯誤');


if(isset($_POST["send"]))
{	
	//$sql="INSERT INTO `主標題`(`主標題`, `內文`, `副標題1`, `內文1`, `圖片`, `簡介`, `最後編輯`) VALUES ('$_POST[title]','$_POST[content]','$_POST[subtitle]','$_POST[subcontent]',123,'$_POST[intro]','$_SESSION[name]')";
	$sql="INSERT INTO `主標題`(`主標題`, `內文`, `副標題1`, `內文1`, `簡介`, `最後編輯`) VALUES ('$_POST[title]','$_POST[content]','$_POST[subtitle]','$_POST[subcontent]','$_POST[intro]','$_SESSION[name]')";
	mysqli_query($db_link, 'SET CHARACTER SET big 5');
	$result=mysqli_query($db_link, $sql);
	
	if(isset($_FILES['file']['name']))
	{	
	$fileName='pic/'.basename($_FILES['file']['name']); 
	$uimg=basename($_FILES['file']['name']); 
	move_uploaded_file($_FILES['file']['tmp_name'], $fileName); 
	//$sql="INSERT INTO `主標題`(`圖片`) VALUES ('$uimg')";
	$sql="UPDATE `主標題` SET `圖片`='$uimg' WHERE `主標題`='$_POST[title]'";
	mysqli_query($db_link, 'SET CHARACTER SET big 5');
	$result=mysqli_query($db_link, $sql);
	}
	echo "<script>alert('上傳成功');</script>";
}

?>
