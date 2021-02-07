<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
header('content_type:text/html;charset=utf-8');
include_once('conn.php');
if($_POST['_un']){
    $sql = "select * from userinfo where username = '$_POST[_un]' and password = '$_POST[_pw]'";
    $result = mysql_query($sql);
	$num = mysql_num_rows($result);
	if($num>0){
	 $row = mysql_fetch_array($result);	
	 echo "<p align='center'>".$row[0].",你好！"."<br/>";
	 echo "<p align='center'>"."请确认电话为：".$row[3]."<br/><br/>";
	 echo "<a href='edita.php'>用户编辑</a>";
	 session_start();
	 $_SESSION[name]=$row[0];
	}

	else
	  echo "<script>alert('用户名或密码错误！请重新登录！');location='login1.php'</script>";
	}
else
  echo "输入为空！";
?>
</body>
</html>