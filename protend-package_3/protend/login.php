<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>登入</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>使用者名稱(Username)</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>密碼(Password)</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">登入</button>
  	</div>
  	<p>
  		還不是會員嗎? <a href="register.php">註冊帳號</a>
  	</p>
<?PHP 
    $filepath= '\img\icon.png'; 
    echo '<img src="'.$filepath.'">'; 
    ?> 
  </form>
</body>
</html>