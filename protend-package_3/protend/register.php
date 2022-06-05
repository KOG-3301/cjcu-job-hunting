<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>帳號註冊</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>使用者名稱(Username)</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>電子郵件(Email)</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>密碼(Password)</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>二次確認密碼</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">確認註冊</button>
  	</div>
  	<p>
  		已經擁有會員了嗎? <a href="login.php">點此登入</a>
  	</p>
  </form>
</body>
</html>