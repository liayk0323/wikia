
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
<li class='active'>搜尋</li>
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
<form method="POST">
<?php
session_start();
$db_link= @mysqli_connect("127.0.0.1", "root", "henry123","wikia");


//搜尋
echo "<div class='container'>
<div class='form-group has-feedback'>
<input type='search' class='form-control' id='book' placeholder='搜尋' name='A'>
<span class='glyphicon glyphicon-search form-control-feedback'></span>
</div>";


if($_POST[A]!=null)
	{
		$sql = "SELECT * FROM `主標題` WHERE `主標題` LIKE '%$_POST[A]%'";
		mysqli_query($db_link, 'SET CHARACTER SET big 5');
		$result=mysqli_query($db_link, $sql);
		$row=mysqli_fetch_all($result);
		if($row!=null)
		{
		echo "<div class='container'>";
		for($y=0;$y<mysqli_num_rows($result);$y++)
			{	
				echo
				"
					<div class='col-lg-4 col-sm-6 portfolio-item'>							
						  <h4>
						  <a href='arti.php?arti=".$row[$y][0]."'>".$row[$y][0]."</a>
						  </h4>
						  <p class='card-text'>".$row[$y][5]."</p>		
						  <hr>
					</div>
				";
			}
			echo "</div>";
		}
		else
		{
			echo "查無結果";
		}
	}

?>




