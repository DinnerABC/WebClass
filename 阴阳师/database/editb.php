<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<?
	header('content-type:text/html;charset=uft-8');
	include('conn.php');
	session_start();
	if($_POST[_pw1] and $_POST[_pw2]){
	if($_POST['_pw1']!=$_POST['_pw2']){
		echo "<script>alert('两次密码输入不一致，请重新输入！');location='edita.php';</script>";
	}
	else{
		
		$sql2="UPDATE user SET password='$_POST[_pw1]' where username='$_SESSION[name]'";
		mysql_query($sql2);
		$sql1="select * from user where username='$_SESSION[name]'";
		$re=mysql_query($sql1);
		$row=mysql_fetch_array($re);
		echo "<p align='center'>密码修改成功！新密码为：".$row[1]."<br>";

	}
	}
	
	if($_POST[_add]){
		$sql4="UPDATE user SET address='$_POST[_add]' where username='$_SESSION[name]'";
		mysql_query($sql4);
		$sql1="select * from user where username='$_SESSION[name]'";
		$re=mysql_query($sql1);
		$row=mysql_fetch_array($re);
		echo "<p align='center'>地址修改成功！新的地址为：".$row[2];
	}
	if($_POST[_tel]){
		$sql3="UPDATE user SET tel='$_POST[_tel]' where username='$_SESSION[name]'";
		mysql_query($sql3);
		$sql1="select * from user where username='$_SESSION[name]'";
		$re=mysql_query($sql1);
		$row=mysql_fetch_array($re);
		echo "<p align='center'>电话修改成功！新的电话号码为：".$row[3];
	}
	?>
</body>
</html>