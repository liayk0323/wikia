<form method="GET">
<?php
$db_link= @mysqli_connect("127.0.0.1", "root", "henry123","wikia");

$sql="DELETE FROM `主標題` WHERE 主標題='$_GET[r]'";
mysqli_query($db_link, 'SET CHARACTER SET big 5');
$result = mysqli_query($db_link, $sql);


echo "<script>alert('刪除成功');location.href='main.php';</script>";
?>