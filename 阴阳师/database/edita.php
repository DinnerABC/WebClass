<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?session_start();?>
<p>用户信息编辑</p>
<form id="form1" name="form1" method="post" action="editb.php">
  <table width="300" border="1">
    <tbody>
      <tr>
        <td>用户名:</td>
        <td><?echo $_SESSION[name];?></td>
      </tr>
      <tr>
        <td>密码：</td>
        <td>
        <input type="password" name="_pw1" id="password"></td>
      </tr>
      <tr>
        <td>确认密码：</td>
        <td><input type="password" name="_pw2" id="password"></td>
      </tr>
      <tr>
        <td>联系电话：</td>
        <td><input type="number" name="_tel" id="number"></td>
      </tr>
      <tr>
        <td>地址：</td>
        <td><textarea name="_add" id="textarea"></textarea></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" id="submit" value="提交"></td>
        <td><input type="reset" name="reset" id="reset" value="重置"></td>
      </tr>
    </tbody>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>