<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
include_once('conn.php');
if($_POST['_un']){
	if($_POST[_pw1]!=$_POST[_pw2])
	  {echo "<script>alert('两次输入的密码不一致，请重新输入！');location='register3.php';</script>";}
	  else{
		  $s1="select * from user where username='$_POST[_un]'";
	      $r=mysql_query($s1);
	      $num=mysql_num_rows($r);
	if($num>0)
	  echo "<script>alert('此用户名已被注册，请重新命名！');location='register3.php';</script>";
	  else
	  {
		  $i="insert into user values('$_POST[_un]','$_POST[_pw1]','$_POST[_add]','$_POST[_tel]')";//必须与字段个数一致，不能少。
	  mysql_query($i);
	  $num=mysql_affected_rows();
	  if($num>0)
	    echo "用户注册成功！请<a href='login1.php'>登录</a>";
	  else
	    echo "用户注册失败！";}
	  }

	}
else
  echo "输入为空！请<a href='register3.php'>返回</a>！";
?>
</body>
</html>