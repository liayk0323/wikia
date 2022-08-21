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

<?php
session_start();

$_SESSION[a]=$_GET[arti];



$db_link=@mysqli_connect("127.0.0.1", "root", "henry123", "wikia") or die("資料庫連結失敗");

if(isset($_POST[edit1]))
{
	$_SESSION['count']=$_SESSION['count']+1;
}

if($A==null)
{
	echo "<form method='POST' action='arti.php?arti=$_GET[arti]'>";
	$A++;
}
else
{
	echo "<form method='POST' action='arti.php?arti=$_SESSION[nt]'>";
}

if(isset($_POST[edit2]))
{	
	if($_SESSION['count2']>0)
	{
	$sql="UPDATE `主標題` SET `主標題`='$_POST[content]' WHERE `主標題`='$_SESSION[nt]'";
	mysqli_query($db_link, 'SET CHARACTER SET big 5');
	$result=mysqli_query($db_link, $sql);
	$_SESSION[nt]=$_POST[content];
	
	}
	else
	{
		$sql="UPDATE `主標題` SET `主標題`='$_POST[content]' WHERE `主標題`='$_GET[arti]'";
		mysqli_query($db_link, 'SET CHARACTER SET big 5');
		$result=mysqli_query($db_link, $sql);
		$_SESSION[nt]=$_POST[content];
		$_SESSION['count2']=$_SESSION['count2']+1;
	
	}
}




	   	//fetch all 用二維陣列取得資料庫所有內容
		$sql="SELECT * FROM `主標題` WHERE `主標題` LIKE '%$_GET[arti]%'";
		$result=mysqli_query($db_link, $sql);
		$row=mysqli_fetch_all($result);
		echo "<center><input type='submit' name='edit1' value='修改'><input type='submit' name='edit2' value='確定'></center>";
		echo "<div class='container'>";
		//框框的行
		echo "<div class='row'>";
		
		for($y=0;$y<mysqli_num_rows($result);$y++)
		{
			
			if($_SESSION['count']%2==0)
			{
				
				echo
			"
				<!-- 主標題 --> 
				<div class='col-lg-8 col-sm-8 portfolio-item'>
				<h1>
				   ".$row[$y][0]."
				<hr>
				</h1>
			";
			}	
			if($_SESSION['count']%2==1)
			{
				echo
			"
				<!-- 主標題 --> 
				<div class='col-lg-8 col-sm-8 portfolio-item'>
				<h1>
				   <textarea rows=2 cols=10 name='content'>".$row[$y][0]."</textarea>
				<hr>
				</h1>
			";
			}
			//col-lg-4大螢幕4+4+4=「12」 col-sm-6平板6+6=「12」
			//0=主標題 1=內文 2=副標題1 3=內文1 4=圖片 5=簡介 6=最後編輯
			/*echo
			"
				<!-- 主標題 --> 
				<div class='col-lg-8 col-sm-8 portfolio-item'>
				<h1>		
				".$row[$y][0]."
				<hr>
				</h1>
			";*/
			echo"<h5>
				<pre>
".$row[$y][5]."
				</pre>
				</h5>
					<!--主標內文-->
				<h4>	
				".$row[$y][1]."
				    </h4>
				</div>
				<!--圖片-->
				<div class='col-lg-4 col-sm-4 portfolio-item'>
				<a href='./pic/".$row[$y][4]."'><img src='./pic/".$row[$y][4]."' alt='' width='300' height='300'></a>
				</div>
				<!--副標1-->
				<div class='col-lg-12 col-sm-12 portfolio-item'>		
				<h2>
				".$row[$y][2]."
				</h2>
				<hr>
				</div>
				<!--副標內文-->
				<div class='col-lg-12 col-sm-12 portfolio-item'>
				<h4>
				".$row[$y][3]."
				</h4>
				
				<!--最後編輯-->
				<hr>
				最後編輯：".$row[$y][6]."
				
				
			";
		}
		echo "</div>";		
		echo "</div>";


/*
if($A<2)
{
	$sql="UPDATE `主標題` SET `主標題`=".$_POST['content']." WHERE `主標題`='$_GET[arti]'";
	mysqli_query($db_link, 'SET CHARACTER SET big 5');
	$result=mysqli_query($db_link, $sql);
}
else
{
	$sql="UPDATE `主標題` SET `主標題`='$_POST[content]' WHERE `主標題`='$content'";
	mysqli_query($db_link, 'SET CHARACTER SET big 5');
	$result=mysqli_query($db_link, $sql);
}
$content=$_POST[content];*/
?>