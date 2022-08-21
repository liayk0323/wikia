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

<ul class='breadcrumb'>
<li class='active'>首頁</li>
<li><a href='search.php'>搜尋</a></li> 
<li><a href='newadd.php'>新增</a></li>
<li>
<?php
		  session_start();
		  if($_SESSION['name'] == null)
			  echo "<a href='login.php'>會員登入</a>";
		  else
		  {
			  echo "<font color='orange' face='微軟正黑體'><b>歡迎&nbsp$_SESSION[name]&nbsp你好</b></font>";		
			  echo "<li><a href='destroy.php'>登出</a></li>";
			  echo "<li><a href='change.php'>更改密碼</a></li>";
		  }
?>

</li>
</ul>
<form method="POST" action="main.php">

<hr>
<center><img src="/pic/main.png" title="封面" height="400"></center>
<body>　

<div class="container">
	<div class="panel panel-default">
	    <div class="panel-body">
	 <div class='col-lg-6 col-sm-6 portfolio-item'>
	    <div class="panel-body">
		<center><img src="/pic/pika.jpg" title="封面" width="60%"></center>
		
		</div>
	  </div>
	  <div class='col-lg-6 col-sm-6 portfolio-item'>	 
	    <div class="panel-body">
		<pre>
作者自介：
		
要冷死了

		⠄⠄⠄⠄⠄⠄⠄⠈⠉⠁⠈⠉⠉⠙⠿⣿⣿⣿⣿⣿
		⠄⠄⠄⠄⠄⠄⠄⠄⣀⣀⣀⠄⠄⠄⠄⠄⠹⣿⣿⣿
		⠄⠄⠄⠄⠄⢐⣲⣿⣿⣯⠭⠉⠙⠲⣄⡀⠄⠈⢿⣿
		⠐⠄⠄⠰⠒⠚⢩⣉⠼⡟⠙⠛⠿⡟⣤⡳⡀⠄⠄⢻
		⠄⠄⢀⣀⣀⣢⣶⣿⣦⣭⣤⣭⣵⣶⣿⣿⣏⠄⠄⣿
		⠄⣼⣿⣿⣿⡉⣿⣀⣽⣸⣿⣿⣿⣿⣿⣿⣿⡆⣀⣿
		⢠⣿⣿⣿⠿⠟⠛⠻⢿⠿⣿⣿⣿⣿⣿⣿⣿⣿⣶⣼
		⠄⣿⣿⣿⡆⠄⠄⠄⠄⠳⡈⣿⣿⣿⣿⣿⣿⣿⣿⣿
		⠄⢹⣿⣿⡇⠄⠄⠄⠄⢀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
		⠄⠄⢿⣿⣷⣨⣽⣭⢁⣡⣿⣿⠟⣩⣿⣿⣿⠿⠿⠟
		⠄⠄⠈⡍⠻⣿⣿⣿⣿⠟⠋⢁⣼⠿⠋⠉⠄⠄⠄⠄
		⠄⠄⠄⠈⠴⢬⣙⣛⡥⠴⠂⠄⠄⠄⠄⠄⠄⠄⠄⠄

				
		</pre>
		</div>
	  </div>
	  </div>
	  </div>
</div>

</div>
<hr>

<div class="container">
<?php
session_start();
	$db_link=@mysqli_connect("127.0.0.1", "root", "henry123", "wikia") or die("資料庫連結失敗");
	

	//Group By 主標題
	$sql="SELECT `主標題` FROM `主標題` GROUP BY `主標題`";
	$result=mysqli_query($db_link, $sql);
	
	//標題 LD-...
	
	  
	  
	  	//fetch all 用二維陣列取得資料庫所有內容
		$sql="SELECT `主標題`, `內文`, `副標題1`, `內文1`, `圖片`, `簡介` FROM `主標題`";
		$result=mysqli_query($db_link, $sql);
		$row=mysqli_fetch_all($result);
		
		//框框的行
		echo "<div class='row'>";
		
		for($y=0;$y<mysqli_num_rows($result);$y++)
		{
			//col-lg-4大螢幕4+4+4=「12」 col-sm-6平板6+6=「12」
			//0=主標題 1=內文 2=副標題1 3=內文1 4=圖片 5=簡介
			echo"
			<div class='col-lg-4 col-sm-6 portfolio-item'>
			  <div class='card h-100'>";
				
			echo "<a href='./pic/".$row[$y][4]."'><img class='card-img-top' src='./pic/".$row[$y][4]."' alt='' width='300' height='300'></a>
				<hr>
				<div class='card-body'>
				  <h4 class='card-title'>
					<a href='arti.php?arti=".$row[$y][0]."'>".$row[$y][0]."</a>
				  </h4>
				  <p class='card-text'>".$row[$y][5]."</p>		
				</div>";
			 
			if($_SESSION['name']==='admin')
			{
				echo "<hr>";
				echo "<center><a href='delete.php?r=".$row[$y][0]."'><font color='red'>刪除</font></a></center>";
			}
			echo "</div>";
			echo "</div>";
		}
		
		echo "</div>";
	
?>

	
</div>
<hr>
<footer class="py-5 bg-dark">
<div class="container">
<address> 
<a href="mailto:j102006@shsh.tw">寫信給我們</a> <font color="yellow">◎聯絡電話：(88)7777777</font>
</address>
</div>
</footer>
<!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</form>